<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class MainController extends Controller
{
    public function index()
    {
        $tables = User::where('role', 3)->where('status', 0)->get();
        $rtables = User::where('role', 3)->where('status', 1)->get();
        return view('front.main.main', compact('tables','rtables'));
    }

    public function menu()
    {
        $categories = Category::all();
        return view('front.main.menu', compact('categories'));
    }

    public function register(Request $request)
    {
        $messages = ['password.required' => 'رمز عبور را رواد کنید'];
        $validatedData = $request->validate([
            'userName' => 'required',
            'password' => 'required',
        ], $messages);


        $table = User::where('userName', $request->userName)->first();
        $table->password = Hash::make($request->password);
        $table->status = 1;
        $table->logged = 1;
        if (!empty($request->member_id)) {
            $table->member_id = $request->member_id;
        }
        $table->save();

        $credentials = $request->only('userName', 'password');
        /*dd($credentials);
        if (Auth::check()){
            $tbl = Auth::user();
            $tbl->status = 0;
            $tbl->save();
            Auth::logout();
        }*/

        //dd(Hash::check($request->password,$table->password ));
        Auth::login($table);
        if (Auth::check()) {


            Auth::logoutOtherDevices($request->password);
            $request->session()->regenerate();
            return redirect(route('table.menu'));
        }

        $msg = "مشکلی رخ داد";
        return redirect()->back()->with('warning', $msg);
    }


    public function renter(Request $request)
    {
        $messages = ['password.required' => 'رمز عبور را رواد کنید'];
        $validatedData = $request->validate([
            'userName' => 'required',
            'password' => 'required',
        ], $messages);

        $table = User::where('userName', $request->userName)->first();

        if (Hash::check($request->password, $table->password)) {

            Auth::login($table);
            if (Auth::check()) {

                Auth::logoutOtherDevices($request->password);
                $request->session()->regenerate();
                return redirect(route('table.menu'));
            }
        }

        $msg = "رمز عبور صحیح نمی باشد";
        return redirect()->back()->with('warning', $msg);
    }

    public function logout(User $table,Request $request)
    {
        $table->member_id = 0;
        $table->logged = 0;
        $table->status = 0;
        $table->save();
        Auth::logout();
        $request->session()->flush();
        return redirect(route('home'));
    }
}

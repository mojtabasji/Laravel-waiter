<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $tables = User::where('role', 3)->where('status', 0)->get();
        return view('front.main.main', compact('tables'));
    }

    public function menu()
    {
        $categories = Category::all();
        return view('front.main.menu',compact('categories'));
    }

    public function register(Request $request)
    {
        $messages = ['password.required' => 'رمز عبور را رواد کنید'];
        $validatedData = $request->validate([
            'userName' => 'required',
            'password' => 'required',
        ], $messages);


        $table = User::where('userName', $request->userName)->first();
        $table->password = Hash::make($request->passwoed);
        $table->status = 1;
        if(!empty($request->member_id))
        {
            $table->member_id = $request->member_id;
        }
        $table->save();

        $credentials = $request->only('userName', 'password');
        //dd($credentials);
        if (Auth::check()){
            $tbl = Auth::user();
            $tbl->status = 0;
            $tbl->save();
            Auth::logout();
        }
        Auth::login($table);
        if (Auth::check()) {
            $request->session()->regenerate();
            return redirect(route('table.menu'));
        }

        $msg = "مشکلی رخ داد";
        return redirect()->back()->with('warning', $msg);
    }

    public function logout(User $table)
    {
        $table->member_id = -1;
        $table->status = 0;
        $table->save();
        Auth::logout($table);
        return redirect(route('home'));
    }
}

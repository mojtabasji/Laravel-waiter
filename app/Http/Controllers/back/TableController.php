<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class TableController extends Controller
{
    public function index()
    {
        $users = User::where('role', '=', 3)->paginate(20);
        return view('back.table.Tusers', compact('users'));
    }

    public function insert()
    {
        return view('back.table.Tuserinsert');
    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'نام را وارد کنید',
            'userName.required' => 'فیلد نام کاربری را وارد نمایید',
            'password.confirmed' => 'تکرار رمز عبور مطابق نیست',
        ];

        $validatedData = $request->validate([
            'name' => 'required',
            'userName' => 'required',
        ], $messages);


        $user = new User();
       // dd($request);
        try {
            $user = $user->create($request->all());

            if (!empty($request->password)) {
                $validatedData = $request->validate([
                    'password' =>'confirmed',
                ]);
                $password = Hash::make($request->password);
                $user->password = $password;
            }
            $user->role = $request->role;
            $user->status = $request->status;
            $user->save();
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect()->back()->with('warning', $exception->getCode());
        }



        $msg = "افزودن کاربر با موفقیت انجام شد";
        return redirect(route('admin.tables'))->with('success', $msg);
    }


    public function edit(User $user)
    {
        return view('back.table.Tuseredit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $messages = [
            'userName.required' => 'فیلد نام را وارد نمایید',
            'password.min' => 'تعداد کاراکتر رمز کافی نیست',
            'password.confirmed' => 'تکرار رمز عبور مطابق نیست',
        ];

        $validatedData = $request->validate([
            'userName' => 'required',
            'name' => 'required',
        ], $messages);

        if (!empty($request->password)) {
            $validatedData = $request->validate([
                'password' => 'confirmed',
            ],$messages);
            $password = Hash::make($request->password);
            $user->password = $password;
        }

        $user->name = $request->name;
        $user->userName = $request->userName;
        $user->status = $request->status;

        try {
            $user->save();
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect()->back()->with('warning', $exception->getCode());
        }

        $msg = "ویرایش با موفقیت انجام شد";
        return redirect(route('admin.tables'))->with('success', $msg);
    }
}

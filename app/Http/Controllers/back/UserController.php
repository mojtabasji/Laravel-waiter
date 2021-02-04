<?php

namespace App\Http\Controllers\back;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($role)
    {
        if ($role == 2) {
            $users = User::where('role', '<=', $role)->paginate(20);
            return view('back.pages.Eusers', compact('users'));
        }
        if ($role == 3) {

            $users = User::where('role', '=', $role)->paginate(20);
            return view('back.pages.Eusers', compact('users'));
        }
        return view('back.main');
    }

    public function Einsert()
    {
        return view('back.pages.Euserinsert');
    }

    public function edit(User $user)
    {
        return view('back.pages.Euseredit', compact('user'));
    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'نام را وارد کنید',
            'userName.required' => 'فیلد نام را وارد نمایید',
            'password.min' => 'تعداد کاراکتر رمز کافی نیست',
            'password.confirmed' => 'تکرار رمز عبور مطابق نیست',
        ];

        $validatedData = $request->validate([
            'name' => 'required',
            'userName' => 'required',
            'password' => 'min:8|confirmed',
        ], $messages);

        $password = Hash::make($request->password);

        $user = new User();

        try {
            $user = $user->create($request->all());
            $user->password = $password;
            $user->status = $request->status;
            $user->role = $request->role;
            $user->save();
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect()->back()->with('warning', $exception->getCode());
        }

        $msg = "افزودن کاربر با موفقیت انجام شد";
        return redirect(route('admin.users', 2))->with('success', $msg);
    }


    public function update(Request $request, User $user)
    {
        $messages = [
            'userName.required' => 'فیلد نام را وارد نمایید',
            'password.min' => 'تعداد کاراکتر رمز کافی نیست',
            'password.confirmed' => 'تکرار رمز عبور مطابق نیست',
        ];


        if (!empty($request->password)) {
            $validatedData = $request->validate([
                'userName' => 'required',
                'password' => 'min:8|confirmed',
            ], $messages);

            $password = Hash::make($request->password);
            $user->password = $password;
        } else {
            $validatedData = $request->validate([
                'userName' => 'required',
            ], $messages);
        }

        if (!empty($request->name)) {
            $user->name = $request->name;
        }

        $user->userName = $request->userName;
        $user->status = $request->status;
        $user->role = $request->role;

        try {
            $user->save();
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect()->back()->with('warning', $exception->getCode());
        }

        $msg = "ویرایش با موفقیت انجام شد";
        return redirect(route('admin.users', 2))->with('success', $msg);
    }

    public function updatestatus(User $user)
    {
        if ($user->status == 1)
            $user->status = 0;
        else
            $user->status = 1;
        $user->save();
        return redirect()->back();
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}

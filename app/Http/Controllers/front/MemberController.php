<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class MemberController extends Controller
{
    public function login()
    {
        return view('front.member.memberlogin');
    }


    public function enter(Request $request)
    {
        $tables = User::where('role','=',3)->where('status', 0)->get();
        //dd($tables);
        $member = Member::where('userName', '=', $request->userName)->first();
        if (!empty($member)) {
            if ($member->password == $request->password) {
                $msg = 'ورود موفقت امیز';
                return view('front.member.setdesk',compact('member','tables'));
            }
        }
        $msg = 'کاربر  و یا رمز عبور نا معتبر است';
        return redirect()->back()->with('warning', $msg);
    }


    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->back();
    }



    public function insert()
    {
        return view('front.member.memberregister');
    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'نام را وارد کنید',
            'userName.required' => 'فیلد نام کاربری را وارد نمایید',
            'userName.unique' => 'این نام کاربری از قبل وجود دارد',
            'phone.required' => 'فیلد تلفن را وارد نمایید',
            'password.confirmed' => 'تکرار رمز عبور مطابق نیست',
            'password.min' => 'تعداد  کاراکتر رمز عبور کافی نیست',
            'password.required' => 'تعداد کاراکتر رمز عبور کافی نیست',
        ];

        $validatedData = $request->validate([
            'name' => 'required',
            'userName' => 'required|unique:members',
            'phone' => 'required',
            'password' => 'required|min:8|confirmed',
        ], $messages);


        $member = new Member();
        try {
            $member = $member->create($request->all());
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect()->back()->with('warning', $exception->getCode());
        }

        $msg = "افزودن کاربر با موفقیت انجام شد";
        return redirect(route('member.insert'))->with('success', $msg);
    }


    public function edit(Member $member)
    {
        return view('back.member.memberedit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $messages = [
            'userName.required' => 'فیلد نام را وارد نمایید',
            'password.min' => 'تعداد کاراکتر رمز کافی نیست',
            'password.confirmed' => 'تکرار رمز عبور مطابق نیست',
        ];

        $validatedData = $request->validate([
            'userName' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ], $messages);

        if (!empty($request->password)) {
            $validatedData = $request->validate([
                'password' => 'confirmed',
            ], $messages);
            $password = $request->password;
            $member->password = $password;
        }

        $member->name = $request->name;
        $member->userName = $request->userName;
        $member->phone = $request->phone;
        $member->discount = $request->discount;

        try {
            $member->save();
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect()->back()->with('warning', $exception->getCode());
        }

        $msg = "ویرایش با موفقیت انجام شد";
        return redirect(route('admin.members'))->with('success', $msg);
    }
}

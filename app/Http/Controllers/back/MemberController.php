<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::paginate(20);
        return view('back.member.members', compact('members'));
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->back();
    }



    public function insert()
    {
        return view('back.member.memberinsert');
    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'نام را وارد کنید',
            'userName.required' => 'فیلد نام کاربری را وارد نمایید',
            'phone.required' => 'فیلد تلفن را وارد نمایید',
            'password.confirmed' => 'تکرار رمز عبور مطابق نیست',
            'password.required' => 'تعداد کاراکتر رمز عبور کافی نیست',
        ];

        $validatedData = $request->validate([
            'name' => 'required',
            'userName' => 'required',
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
        return redirect(route('admin.members'))->with('success', $msg);
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
            ],$messages);
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

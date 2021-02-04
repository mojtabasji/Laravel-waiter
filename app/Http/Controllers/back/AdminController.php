<?php

namespace App\Http\Controllers\back;

use App\Models\User;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.auth.Mregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید',
            'password.required' => 'فیلد رمز عبور را وارد نمایید',
            'password.min' => 'تعداد کاراکتر رمز عبور کافی نیست',
            'userName.unique' => 'فیلد نام کاربری تکراری است.عنوان را عوض کنید',
            'userName.required' => 'فیلد نام کاربری اجباری است',
            'password.confirmed' => 'تکرار رمز عبور مطابق نیست',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'userName' => 'required|unique:members',
            'password' => 'required|min:8|confirmed',
        ], $messages);

        $member = new Member();
        try {
            $member->create($request->all());
        } catch (Exception $exception) {
            $msg = $exception;
            return redirect(route('member.register'))->with('warning', $msg);
        }

        $msg = "ذخیره ی دسته بندی جدید با موفقیت انجام شد";
        return redirect(route('member.register'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}

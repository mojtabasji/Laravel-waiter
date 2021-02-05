@extends('front.index')

@section('content')
    <hr>
    <div class="testimonial_area overlay custom_mt">
        <div class="container" dir="rtl">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <p>خوش آمدید</p>
                        <h3>لطفا میز خود را انتخاب کنید</h3>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5 card " style="border-color: black">
                    <div class="heading-section ftco-animate mb-5 text-center ">
                        <h2 class="mb-4">انتخاب میز</h2>
                    </div>
                    <form action="{{ route('table.register') }}" method="POST">
                        @csrf
                        <div class="row ">
                            <div class="col-md-12">

                                <div class="form-group mt-5">
                                    <label class="float-right">نام کاربر :</label>
                                    <input type="text" class="form-control border border-info" value="{{ $member->name }}"
                                        disabled>
                                </div>

                                <input type="hidden" name="member_id" value="{{ $member->id }}">

                                <div class="col-md-12">
                                    <div class="default-select d-flex row" dir="rtl" id="default-select">
                                        <label for="tselect" class="float-right">میز :</label>
                                        <select name="userName" id="tselect"
                                            class="float-right col-md-12 border border-info rounded ">
                                            @foreach ($tables as $table)
                                                <option value="{{ $table->userName }}">{{ $table->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mt-5">
                                    <label for="" class="float-right">رمز عبور</label>
                                    <input name="password" type="password" value="{{ $member->password }}"
                                        class="form-control border border-info" placeholder="رمز عبور" @error('password')
                                        is-invalid @enderror>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <input type="submit" value="ثبت" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endsection

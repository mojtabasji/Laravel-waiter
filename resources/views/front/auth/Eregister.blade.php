@extends('front.index')

@section('content')
    @include('front.messages')
    <hr>
    <section class="ftco-section img" style="background-image: url({{ url('/front/img/icon/2.png') }})"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex" dir="rtl">
                <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5 card" style="border-color: black">
                    <div class="heading-section ftco-animate mb-5 text-center ">
                        <h2 class="mb-4">ثبت نام کارکنان</h2>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="float-right">نام</label>
                                    <input name="name" type="text" style="border-color: black" class="form-control" placeholder="نام" @error('name')
                                        is-invalid @enderror>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group " style="direction: rtl">
                                    <label for="userName"  class="float-right">نام کاربری</label>
                                    <input name="userName" style="border-color: black" type="text" id="userName" class="form-control"
                                        placeholder="نام کاربری">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="float-right">رمز عبور</label>
                                    <input name="password" style="border-color: black" type="password" class="form-control" placeholder="رمز عبور"
                                        @error('password') is-invalid @enderror>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="float-right">تکرار رمز عبور</label>
                                    <input name="password_confirmation" style="border-color: black" type="password" class="form-control" id="book_date"
                                        placeholder="تکرار رمز عبور">
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
    </section>
    <hr>
@endsection

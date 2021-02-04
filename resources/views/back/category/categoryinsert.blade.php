@extends('back.index')

@section('content')

    <div class="contact_area section_gap  " style="text-align: right;">
        <div class="container justify-content-center">
            <div class="row ">
                <div class="col-lg-9" dir="rtl">

                    <div class="heading-section ftco-animate mb-5 text-center ">
                        <h2 class="mb-4">افزودن دسته بندی</h2>
                    </div>
                    <form class="row contact_form" action="{{ route('admin.category.store') }}" method="POST" id="contactForm"
                        novalidate="novalidate">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-size: 18px; color: black;">نام :</label>
                                <input type="text" class="form-control"
                                    style="border: 2px solid rgb(61, 63, 206); border-radius: 4px;  color: black;"
                                    name="name" placeholder="نام" @error('name') is-invalid @enderror>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 text-right">
                            <button style="font-size: 18px; color:black; margin: 10px;" type="submit" value="submit"
                                class="genric-btn success radius">ثبت</button>
                            <a href="{{ route('admin.categorys') }}">
                                <div style="font-size: 18px; color:black; margin: 10px;" class="genric-btn warning radius">
                                    انصراف</div>
                            </a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection

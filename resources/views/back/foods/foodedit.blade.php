@extends('back.index')

@section('content')

    <div class="contact_area section_gap  " style="text-align: right;">
        <div class="container justify-content-center">
            <div class="row ">
                <div class="col-lg-9" dir="rtl">

                    <div class="heading-section ftco-animate mb-5 text-center ">
                        <h2 class="mb-4">ویرایش غذا</h2>
                    </div>
                    <form class="row contact_form" action="{{ route('admin.food.update', $food->id) }}" method="POST"
                        id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-size: 18px; color: black;">نام :</label>
                                <input type="text" class="form-control" value="{{ $food->name }}"
                                    style="border: 2px solid rgb(61, 63, 206); border-radius: 4px;  color: black;"
                                    name="name" placeholder="نام" @error('name') is-invalid @enderror>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label style="font-size: 18px; color: black;">قیمت :</label>
                                <input type="text" class="form-control" value="{{ $food->price }}"
                                    style="border: 2px solid rgb(61, 63, 206); border-radius: 4px;  color: black;"
                                    name="price" placeholder="" @error('price') is-invalid @enderror>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }} </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-size: 18px; color: black;">دسته ها :</label>
                                <div class="form-select "
                                    style="color: black;  border: 2px solid rgb(61, 63, 206); border-radius: 4px;">
                                    <div id="output"></div>
                                    <select name="categories[]" class="chosen-select w-100 h-100 text-black border border-info rounded"
                                        multiple tabindex="2">
                                        @foreach ($categories as $cat_id => $cat_name)
                                            <option value="{{ $cat_id }}" <?php if(in_array($cat_id,$food->categories()->pluck('category_id')->toArray())) echo 'selected' ?>>{{ $cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 18px; color: black;">انتخاب تصویر :</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="image" data-preview="holder" class="btn btn-info">
                                            <i class="fa text-dark"> انتخاب</i>
                                        </a>
                                    </span>
                                    <input id="image" class="form-control" type="text" name="image">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div id="holder" class="img-fluid">
                                <img class="img-fluid" src="{{ $food->image }}">
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <label style="font-size: 18px; color: black;">توضیحات :</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    style="border: 2px solid rgb(61, 63, 206); border-radius: 4px; color: black;"
                                    name="description" placeholder="توضیحات">{{ $food->description }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 text-right">
                            <button style="font-size: 18px; color:black; margin: 10px;" type="submit" value="submit"
                                class="genric-btn success radius">ثبت</button>
                            <a href="{{ route('admin.foods') }}">
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

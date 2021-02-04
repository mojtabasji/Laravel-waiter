@extends('back.index')

@section('content')

    <div class="whole-wrap" style="text-align: right">
        <div class="container ">
            <div class="section-top-border">
                <h3 class="mb-30 title_color">غذا</h3>
                <hr>
                <div class="progress-table-wrap " dir="rtl">
                    <div class="progress-table">
                        <div class="table-head" style="color: black">
                            <div class="serial"><b style="color:black">شماره</B></div>
                            <div class="country"><b style="color:black">نام</b></div>
                            <div class="visit"><b style="color:black">دسته</b></div>
                            <div class="percentage"><b style="color:black">توضیحات</b></div>
                            <div class="visit"><b style="color:black">قیمت</b></div>
                            <div class="country"><b style="color:black">پیشنهاد</b></div>
                            <div class="percentage"><b style="color:black">مدیریت</b></div>
                        </div>

                        @foreach ($foods as $food)

                            <div class="table-row" style="color: black">
                                <div class="serial">{{ $food->id }}</div>
                                <div class="country">{{ $food->name }}</div>
                                <div class="visit">{{ $food->category_id }}</div>
                                <div class="percentage"><?php echo Str::substr($food->description ,0, 25).'...' ?></div>
                                <div class="visit">{{ $food->price }}</div>
                                <div class="country">
                                    @if ($food->dayOffer == 1)
                                        <a href="{{ route('admin.food.updatedayOffer', $food->id) }}"
                                            class="genric-btn success circle">فعال</a>
                                    @else
                                        <a href="{{ route('admin.food.updatedayOffer', $food->id) }}"
                                            class="genric-btn success-border circle">غیر فعال</a>
                                    @endif
                                </div>
                                <div class="percentage">
                                    <a href="{{ route('admin.food.destroy', $food->id) }}"
                                        onclick="return confirm('آیا آیتم مورد نظر حذف شود');"
                                        class="genric-btn primary circle">حذف</a>
                                    <a href="{{ route('admin.food.edit', $food->id) }}"
                                        class="genric-btn success circle">ویرایش</a>
                                </div>

                            </div>

                        @endforeach

                    </div>

                    <div class="col-md-12 text-right">
                        <a href="{{ route('admin.food.create') }}">
                            <div style="font-size: 18px; background-color: rgb(30, 209, 30);color:black; margin: 10px;"
                                class="genric-btn warning radius">افزودن</div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

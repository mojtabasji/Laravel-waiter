@extends('back.index')

@section('content')

    <div class="whole-wrap" style="text-align: right">
        <div class="container ">
            <div class="section-top-border">
                <h3 class="mb-30 title_color">اعضا</h3>
                <hr>
                <div class="progress-table-wrap " dir="rtl">
                    <div class="progress-table">
                        <div class="table-head" style="color: black">
                            <div class="serial"><b style="color:black">شماره</B></div>
                            <div class="country"><b style="color:black">نام</b></div>
                            <div class="visit"><b style="color:black">نام کاربری</b></div>
                            <div class="percentage"><b style="color:black">تلقن</b></div>
                            <div class="visit"><b style="color:black">تخفیف</b></div>
                            <div class="percentage"><b style="color:black">مدیریت</b></div>
                        </div>

                        @foreach ($members as $member)

                            <div class="table-row" style="color: black">
                                <div class="serial">{{ $member->id }}</div>
                                <div class="country">{{ $member->name }}</div>
                                <div class="visit">{{ $member->userName }}</div>
                                <div class="percentage">{{ $member->phone }}</div>
                                <div class="visit">{{ $member->discount }}</div>
                                <div class="percentage">
                                    <a href="{{ route('admin.member.destroy', $member->id) }}"
                                        onclick="return confirm('آیا آیتم مورد نظر حذف شود');"
                                        class="genric-btn primary circle">حذف</a>
                                    <a href="{{ route('admin.member.edit', $member->id) }}"
                                        class="genric-btn success circle">ویرایش</a>
                                </div>

                            </div>

                        @endforeach

                    </div>

                    <div class="col-md-12 text-right">
                        <a href="{{ route('admin.member.insert') }}">
                            <div style="font-size: 18px; background-color: rgb(30, 209, 30);color:black; margin: 10px;"
                                class="genric-btn warning radius">افزودن</div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

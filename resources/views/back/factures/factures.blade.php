@extends('back.index')

@section('content')

    <div class="whole-wrap" style="text-align: right">

        @foreach ($factures as $facture)

            <div class="container card shadow-lg">
                <div class="section-top-border">
                    <h3 class="mb-30 title_color">{{ $facture->user->name }}</h3>
                    <hr>
                    <div class="progress-table-wrap " dir="rtl">
                        <div class="progress-table">
                            <div class="table-head" style="color: black">
                                <div class="serial"><b style="color:black">شماره</B></div>
                                <div class="country"><b style="color:black">نام</b></div>
                                <div class="visit"><b style="color:black">مبلغ</b></div>
                                <div class="country"><b style="color:black">درصد تخفیف</b></div>
                                <div class="percentage"><b style="color:black">مبلغ با تخفیف</b></div>
                            </div>

                            <div class="table-row" style="color: black">
                                <div class="serial">{{ $facture->id }}</div>
                                <div class="country">
                                    <?php
                                    $member = $facture->user->member;
                                    if (!empty($member)) {
                                    echo $member->name;
                                    }
                                    ?>
                                </div>
                                <div class="visit">{{ $facture->cost }}</div>
                                <div class="country">
                                    <?php
                                    $member = $facture->user->member;
                                    if (!empty($member)) {
                                    echo $member->discount;
                                    }
                                    ?>
                                </div>
                                <div class="percentage">
                                    <?php
                                    $member = $facture->user->member;
                                    if (!empty($member)) {
                                    echo $facture->cost - ($facture->cost * $member->discount) / 100;
                                    } else {
                                    echo $facture->cost;
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                        <a href="{{route('admin.facture.pay',$facture->id)}}" class="genric-btn primary circle">پرداخت</a>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach

    </div>
@endsection

@extends('front.index')

@section('content')

    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border " style="text-align: right" dir="rtl">
                <h3 class="mb-30">{{ $facture->user->name }}</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">نام</div>
                            <div class="visit">تعداد</div>
                            <div class="percentage">سرو</div>
                            <div class="country">قیمت</div>
                            <div class="visit"></div>
                        </div>
                        @foreach ($orders as $order)
                            <div class="table-row">
                                <div class="serial">{{ $order->id }}</div>
                                <div class="country"><a
                                        href="{{ route('food', $order->food->id) }}">{{ $order->food->name }}</a></div>
                                <div class="visit">{{ $order->count }}
                                    <a href="<?php if($order->served == 0) echo route('basket.order.increase',$order->id); else echo '#'; ?>" class="genric-btn success circle" style="color: black">^</a>
                                    <a href="<?php if($order->served == 0) echo route('basket.order.decrease',$order->id); else echo '#'; ?>" class="genric-btn warning circle" style="color: black">v</a>
                                </div>
                                <div class="percentage">
                                    <?php if ($order->served == 1) {
                                    echo '<h3> شده</h3>';
                                    } else {
                                    echo '<h3>نشده</h3>';
                                    } ?>
                                </div>
                                <div class="country">{{ $order->count * $order->food->price }}</div>
                                <div class="visit">
                                    <form action="<?php if($order->served == 0) echo route('basket.order.delete',$order->id).'" method="POST"'; else echo'#"'; ?>>
                                    @csrf
                                        <button type="submit"  class="genric-btn warning circle" style="color: black">حذف</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row" >
                <h3 class="m-3">{{$facture->cost}}</h3>
                <p class="m-3">: مبلغ فاکتور </p>
            </div>
            <hr>
        </div>
    </div>
@endsection

@extends('back.index')

@section('content')

    <div class="whole-wrap" style="text-align: right">

        @foreach ($factures as $facture)

        <div class="container card shadow-lg">
            <div class="section-top-border">
                <h3 class="mb-30 title_color">{{$facture->user->name}}</h3>
                <hr>
                <div class="progress-table-wrap " dir="rtl">
                    <div class="progress-table">
                        <div class="table-head" style="color: black">
                            <div class="serial"><b style="color:black">شماره</B></div>
                            <div class="country"><b style="color:black">نام</b></div>
                            <div class="visit"><b style="color:black">تعداد</b></div>
                            <div class="percentage"><b style="color:black">وضعیت</b></div>
                        </div>


                        @foreach ($facture->orders as $order)
                            <div class="table-row" style="color: black">
                                <div class="serial">{{ $order->id }}</div>
                                <div class="country">{{ $order->food->name }}</div>
                                <div class="visit">{{ $order->count }}</div>
                                <div class="percentage">
                                    <?php if($order->served == 0)
                                    echo '<a href="'.route('admin.order.serve',$order->id).'" class="genric-btn warning circle">سرو نشده</a>';
                                    else echo '<a href="'.route('admin.order.serve',$order->id).'" class="genric-btn success circle">سرو شده</a>';
                                    ?>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>
        <hr>
        @endforeach

    </div>
@endsection

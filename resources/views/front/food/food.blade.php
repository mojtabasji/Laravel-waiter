@extends('front.index')

@section('content')
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border text-right border border-success shadow-lg p-3 m-5 bg-body rounded">
                <div class="row">
                    <div class="col-md-9 position-relative">
                        <h3 class="mb-30">{{$food->name}}</h3>
                        <p class="text-right">{{$food->description}}</p>
                        <p style="float:button; margin-button:0px;"  class="m-2 genric-btn primary-border">{{$food->price}}</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{$food->image}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

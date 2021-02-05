@extends('front.index')

@section('content')

    <div class="Delicious_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Delicious Food For You</h3>
                    </div>
                </div>
            </div>
            <div class="tablist_menu">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav justify-content-center" id="pills-tab" role="tablist">

                            @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-{{$category->name}}-tab" data-toggle="pill"
                                        href="#pills-{{ $category->name }}" role="tab"
                                        aria-controls="pills-{{ $category->name }}">
                                        <div class="single_menu text-center">
                                            <div class="icon">
                                                <i class="flaticon-<?php switch ($category->id % 3) {
                                                        case '0':
                                                            echo 'lunch';
                                                            break;
                                                        case '1':
                                                            echo 'food';
                                                            break;
                                                        default:
                                                            echo 'kitchen';
                                                            break;
                                                    } ?>"></i>
                                            </div>
                                            <h4>{{ $category->name }}</h4>
                                        </div>
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                @foreach ($categories as $category)

                    <div class="tab-pane fade active" id="pills-{{ $category->name }}" role="tabpanel"
                        aria-labelledby="pills-{{ $category->name }}-tab">
                        <div class="row" dir="rtl">
                            <?php $foods = $category->foods;
                            foreach ($foods as $food) {
                            echo '
                            <div class="col-md-6 col-lg-6">
                                <div class="single_delicious d-flex justify-content-center border border-info rounded">
                                    <div class="thumb w-30 h-30 m-3">
                                        <img class="w-100 h-100" src="' .
                                        $food->image .
                                        '" alt="">
                                    </div>
                                    <div class="info border border-warning rounded m-3">
                                        <h3>' .
                                            $food->id .
                                            '. ' .
                                            $food->name .
                                            '</h3>
                                        <p>' .
                                            Str::substr($food->description, 0, 40) .
                                            '</p>
                                        <span>' .
                                            $food->price .
                                            '</span>
                                    </div>
                                </div>
                            </div>';
                            }
                            ?>

                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </div>

@endsection

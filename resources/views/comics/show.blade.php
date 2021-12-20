@extends('layouts.app')


@section('content')
<div class="jumbotron container-fluid">
    <div class="small_container">
        <div class="comic">
            <div class="poster">
                <div class="comic_book text-light text-center">COMIC BOOK</div>
                <img src="{{$comic['thumb']}}" alt="">
                <div class="view_gallery text-light text-center">VIEW GALLERY</div>


            </div>
        </div>
    </div>
</div>

<div class="sep"></div>

<div class="small_container ">
    <div class="row py-5">
        <div class="col-8">
            <h2 class="comic_title">{{$comic['title']}}</h2>

            <div class="row_price row">
                <div class="col-8 price_container">
                    <div class="price">
                        U.S. Price: <span class="text-light">{{$comic['price']}}</span>
                    </div>
                    <div class="available">
                        AVAILABLE
                    </div>
                </div>
                <div class="col-4 check_availability text-light text-center">Check avaibility <i
                        class="fa fa-chevron-down" aria-hidden="true"></i></div>
            </div>

            <p class="comic_description py-4">{{$comic['description']}}</p>

        </div>
        <div class="col-4">
            <div class="advertisement">
                <h6 class="text-end">ADVERTISEMENT</h6>
                <div class="img_wrapper">
                    <img width="100%" src="{{asset('img/adv.jpg')}}" alt="">
                </div>
            </div>

        </div>
    </div>



</div>




@endsection
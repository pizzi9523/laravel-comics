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

            <div class="row_price row mx-0">
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

<div class="comic_footer">

    <div class="small_container">
        <div class="row py-5">
            <div class="col-6">
                <h3 class="mb-4">Talent</h3>
                <div class="art_by row m-0">
                    <div class="col-3 col_title">Art by:</div>
                    <div class="col-9">
                        @foreach($comic['artists'] as $artist)
                        <span>{{$artist}}</span>

                        @if(!$loop->last)
                        <span class="text-dark">, </span>
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="written_by row m-0">
                    <div class="col-3 col_title">Written by:</div>
                    <div class="col-9">
                        @foreach($comic['writers'] as $writer)
                        <span>{{$writer}}</span>
                        @if(!$loop->last)
                        <span class="text-dark">, </span>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>




            <div class="col-6">
                <h3 class="mb-4">Specs</h3>
                <div class="series_spec row m-0">
                    <div class="col-3 col_title">Series:</div>
                    <div class="col-9 text-uppercase">
                        {{$comic['series']}}
                    </div>
                </div>
                <div class="price_spec row m-0">
                    <div class="col-3 col_title">U.S. Price</div>
                    <div class="col-9 text-uppercase">
                        {{$comic['price']}}
                    </div>
                </div>
                <div class="data_spec row m-0">
                    <div class="col-3 col_title">On Sale Date:</div>
                    <div class="col-9 ">
                        {{$comic['sale_date']}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container-fluid container_special">
        <div class="small_container">
            <div class="row row_special">
                <div class="col-3">
                    <h6>DIGITAL COMICS</h6>
                </div>
                <div class="col-3">
                    <h6>SHOP DC</h6>


                </div>
                <div class="col-3">
                    <h6>COMIC SHOP LOCATOR</h6>

                </div>
                <div class="col-3">
                    <h6>SUBSCRIPTIONS</h6>

                </div>
            </div>
        </div>


    </div>
</div>




@endsection
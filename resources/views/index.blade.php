@extends('template/template')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <h1>Jelle <span class="parent">Stek <span class="child">elenburg</span></span></h1>
                            </div>
                        </div>
                        <div class="fade one"></div>
                        <div class="fade two"></div>
                        <div class="fade three"></div>
                        <div class="fade four"></div>
                        <div class="fade five"></div>
                        <div class="fade six"></div>
                        <div class="fade seven"></div>
                        <div class="trigger"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6"><div class="image-holder intro"><img src="{{asset('/images/homepage/intro.png')}}" alt=""></div></div>
            </div>
        </div>
    </section>

@endsection
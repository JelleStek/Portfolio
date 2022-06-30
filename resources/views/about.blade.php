@extends('template/template')

@section('content')

    <section class="sub-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="sub-hero__fade">
                        <h1 class="hidden">about</h1>
                        <h2 class="large">Wie ben ik?</h2>
                        <h2 class="large">Wat doe ik?</h2>
                        <h2 class="large">Wat kan ik?</h2>
                    </div>
                </div>
                <div class="col-md-6 col-rm-md">
                    <div class="content">
                        <img src="{{asset('images/about/hero.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
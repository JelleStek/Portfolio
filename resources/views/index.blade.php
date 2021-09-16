@extends('template/template')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 text-center">
                    <h1>Hoi! Ik ben Jelle Stekelenburg, een developer in de Amsterdam regio</h1>
                    <p>Ik ben een 1e jaar HBO student met meer dan 3 jaar ervaring.</p>

                    <div class="box-image">
                        <img src="{{asset('/images/homepage/hero.jpg')}}" alt="nwave website">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 text-center">
                    <h5 class="uppercase">over mij</h5>
                    <h3>Wie ben ik?</h3>
                </div>
                <div class="col-9 text-center">
                    <div class="intro-text">
                        <p>Ik ben Jelle Stekelenburg, Een 19 jarige developer en student.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
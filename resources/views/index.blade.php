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
                    <h5 class="uppercase">Wat doe ik?</h5>
                    <h3>Mijn main skills</h3>
                </div>
                <div class="col-9 text-center">
                    <div class="intro-text">
                        <p>Ik ben Jelle Stekelenburg, Een 19 jarige developer en student.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <img class="box-image" src="{{asset('images/homepage/css.jpg')}}" alt="css self made code">
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <p class="mini-title">Styling</p>
                        <h3>css & sass</h3>
                        <p>Ik heb al meer dan 3 jaar ervaring met front-end development waaronder 1,5 jaar binnen
                            het bedrijfsleven. Via designs kan ik alles pixel perfect namaken op de beste manier
                            mogelijk. Binnen de front-end kant kijk ik vaak naar hoe iets effect kan hebben of de SEO en
                            zorg ervoor dat alles soepel werkt.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <p class="mini-title">Javascript</p>
                        <h3>Javascript & Jquery</h3>
                        <p>Sinds het begin van mijn eerste studie als <a class="pull-out">mediadeveloper<span>Een opleiding op het Mediacollege Amsterdam die ik van 2018 t/m 2021 heb gevolgd</span></a> ben ik bezig geweest met javascript
                            en jquery. Voor mij is het belangrijk een website zo gebruiksvriendelijk te maken en
                            technieken toe te voegen die niet via html & css geïmplementeerd kunnen worden. Ookal heb ik
                            nog veel te leren kan ik al aardig wat binnen javascript en jquery.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="box-image" src="{{asset('images/homepage/js.jpg')}}" alt="Javascript self made code">
                </div>
            </div>
        </div>
    </section>

@endsection
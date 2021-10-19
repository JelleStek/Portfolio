@extends('template/template')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12 text-center">
                    <div class="hero-title"><h2 class="h1">Hoi! Ik ben <span class="space"></span></h2><h1>Jelle Stekelenburg,</h1><span class="space"></span><h2 class="h1"> een developer in de Amsterdam regio</h2></div>
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
                    <h2>Mijn main skills<span class="punt">.</span></h2>
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
                        <p>Sinds het begin van mijn eerste studie als <a class="pull-out">mediadeveloper<span>Een opleiding op het Mediacollege Amsterdam die ik van 2018 t/m 2021 heb gevolgd en afgerond.</span></a>
                            ben ik bezig geweest met javascript
                            en jquery. Voor mij is het belangrijk een website zo gebruiksvriendelijk te maken en
                            technieken toe te voegen die niet via html & css geïmplementeerd kunnen worden. Ookal heb ik
                            nog veel te leren kan ik al aardig mijn weg vinden binnen javascript en jquery.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="box-image" src="{{asset('images/homepage/js.jpg')}}" alt="Javascript self made code">
                </div>
            </div>
        </div>
    </section>

    @include('includes.cta');

    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Mijn laatste werk<span class="punt">.</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="portfolio__item">
                        <div class="__header">
                            <img src="{{asset('/images/portfolio/nwave.jpg')}}" alt="nwave portfolio item">
                            <a href="" class="btn portfolio">Lees meer</a>
                        </div>
                        <div class="__body">
                            <h3>nwave</h3>
                            <p class="short-description">nwave is de eenmans zaak op mijn naam. Via deze manier kan ik freelance werk doen. Website heeft services</p>
                            <div class="tags">
                                <p class="mini-title">laravel</p>
                                <p class="mini-title">sass</p>
                                <p class="mini-title">javascript</p>
                                <p class="mini-title">jquery</p>
                            </div>
                            <div class="mobile">
                                <a href="" class="btn">Lees meer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Neem contact op<span class="punt">.</span></h2>
                </div>
                <div class="col-lg-6">
                    <form action="sending-email" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Naam*</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="col-md-6">
                                <label for="subject">Onderwerp*</label>
                                <input type="text" id="subject" name="subject">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Emailadres*</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="col-md-6">
                                <label for="tel">Telefoonnummer</label>
                                <input type="tel" id="tel" name="tel">
                            </div>
                            <div class="col-12">
                                <label for="message"></label>
                                <textarea name="message" id="message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit">Verstuur</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
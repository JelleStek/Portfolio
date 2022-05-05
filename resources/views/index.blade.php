@extends('template/template')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-lg-9 col-12 text-center">
                    <div class="hero-title"><h2 class="h1">Hoi! Ik ben <span class="space"></span></h2>
                        <h1>Jelle Stekelenburg,</h1><span class="space"></span>
                        <h2 class="h1"> een developer in de Amsterdam regio</h2></div>
                    <p>Ik ben een Front-end developer met 4 jaar ervaring.</p>

                    <div class="box-image">
                        <img src="{{asset('/images/homepage/hero.jpg')}}" alt="nwave website">
                    </div>
                </div> -->
                <div class="col-lg-9 col-12 hide-mobile">
                    <div class="holder">
                        <div class="browser">
                            <div class="__nav">
                                <div class="flex-grid">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="tab">
                                        <p>Portfolio - Jelle Stekelenburg</p>
                                    </div>
                                </div>
                            </div>
                            <div class="__body">
                                <div class="content">
                                    <div class="hero-title"><h3 class="h1">Hoi! Ik ben <span class="space"></span></h3>
                                    <h1>Jelle Stekelenburg.</h1><span class="space"></span>
                                    <h3 class="h1"> Een front-end developer in regio Amsterdam <span class="punt">.</span> </h3></div>
                                </div>
                                <img src="{{asset('/images/homepage/slide_3.jpg')}}" alt="">
                                <img src="{{asset('/images/homepage/slide_2.jpg')}}" alt="">
                                <img src="{{asset('/images/homepage/slide_1.jpg')}}" alt="">
                            </div>
                        </div>
                        <img class="back__slide" src="{{asset('/images/homepage/slide.png')}}" alt="">
                    </div>
                </div>
                <div class="col-12 show-mobile">
                    <div class="hero-title"><h3 class="h1">Hoi! Ik ben <span class="space"></span></h3>
                    <h1>Jelle Stekelenburg,</h1><span class="space"></span>
                    <h3 class="h1"> een developer in de Amsterdam regio</h3></div>
                    <p>Ik ben een Front-end developer met 4 jaar ervaring.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 text-center">
                    <h5 class="uppercase">Wat doe ik?</h5>
                    <h2 class="title-slider">Mijn main skills<span class="punt">.</span></h2>
                </div>
                <div class="col-9 text-center">
                    <div class="intro-text">
                        <p>Wat kan ik, doe ik en heb ik gedaan.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-6 position-relative">
                    <div class="image-container">
                        <div class="blur __one">
                            <img class="box-image" src="{{asset('/images/homepage/css.jpg')}}" alt="Person programming">
                            <img class="behind-animation" src="/images/global/green_png.png" alt="Weird item going around">
                        </div>
                    </div>
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
                <div class="col-lg-6 position-relative">
                    <div class="image-container">
                        <div class="blur __two">
                            <img class="box-image blur __two" src="{{asset('images/homepage/js.jpg')}}" alt="Javascript code">
                            <img class="behind-animation reverse" src="{{asset('/images/global/blue_png.png')}}" alt="Old head">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.cta')

    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <div class="blur __one">
                            <h2 class="title-slider two">Mijn laatste werk<span class="punt">.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="portfolio__grid">

                            <a href="">
                                <div class="portfolio__item muiderslot" data style="background-image: url({{asset('/images/portfolio/muiderslot_background.jpg')}}) ">
                                        <div class="__title">
                                            <h4>Muiderslot</h4>
                                        </div>
                                        <img src="{{asset('/images/portfolio/muiderslot.png')}}" alt="">
                                </div>
                            </a>

                            <a href="">
                                <div class="portfolio__item muiderslot" data style="background-image: url({{asset('/images/portfolio/bluetravel_background.jpg')}}) ">
                                    <div class="__title">
                                        <h4>BLUEtravel</h4>
                                    </div>
                                    <img src="{{asset('/images/portfolio/bluetravel.png')}}" alt="">
                                </div>
                            </a>

                            <a href="">
                                <div class="portfolio__item muiderslot" style="background-image: url({{asset('/images/portfolio/ian_background.jpg')}}) ">
                                    <div class="__title">
                                    <h4>Ian<span style="margin-left:13px"></span>Remeijsen</h4>
                                    </div>
                                    <img src="{{asset('/images/portfolio/ian.png')}}" alt="">
                                </div>
                            </a>

                        </div>    
                    </div>
                </div>
            </div>
    </section>

    <section class="contact">
        <div class="container">
        
            <div class="row align-items-center">
                <div class="col-lg-4">
                <h2 class="mb-30 title-slider three">Neem contact op<span class="punt">.</span></h2>
                    <div class="contact__container">
                        <h4>Mij een bericht sturen?</h4>
                        <p>Contact opnemen is gemakkelijk en veilig, druk op de onderstaande klop om naar het contact formulier te gaan.</p>
                        <a href="https://contactjellestek.nl/" class="btn mt-10">Neem contact op</a>
                        <div class="mt-30"></div>
                        <h4>Project starten?</h4>
                        <p>Tijd voor iets nieuws? vraag een vrijblijvende offerte aan via nwave of kom in contact!</p>
                        <a href="https://nwave.nl" class="btn mt-10 after-lg-mb-30">Naar nwave</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-2 position-relative">
                    <img src="{{asset('/images/homepage/contact-image.jpg')}}" alt="" class="box-image">
                    <img class="behind-animation" src="/images/global/hand.png" alt="Weird item going around">
                </div>
            </div>
        </div>
    </section>


    @endsection

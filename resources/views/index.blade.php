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
                                <div class="hero-title"><h2 class="h1">Hoi! Ik ben <span class="space"></span></h2>
                                <h1>Jelle Stekelenburg,</h1><span class="space"></span>
                                <h2 class="h1"> een developer in de Amsterdam regio</h2></div>
                                <p>Ik ben een Front-end developer met 4 jaar ervaring.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 show-mobile">
                    <div class="hero-title"><h2 class="h1">Hoi! Ik ben <span class="space"></span></h2>
                    <h1>Jelle Stekelenburg,</h1><span class="space"></span>
                    <h2 class="h1"> een developer in de Amsterdam regio</h2></div>
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
                    <h2>Mijn main skills<span class="punt">.</span></h2>
                </div>
                <div class="col-9 text-center">
                    <div class="intro-text">
                        <p>Wat kan ik, doe ik en heb ik gedaan.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-6 position-relative">
                    <div class="blur __one"><img class="box-image" src="{{asset('images/homepage/css.jpg')}}"
                                                 alt="css self made code"></div>
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
                    <div class="blur __two"><img class="box-image blur __two" src="{{asset('images/homepage/js.jpg')}}"
                                                 alt="Javascript self made code"></div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.cta');

    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <div class="blur __one">
                            <h2>Mijn laatste werk<span class="punt">.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="portfolio__grid">
                            <div class="portfolio__item muiderslot" style="background-image: url({{asset('/images/portfolio/Muiderslot.jpg')}}) ">
                                <div class="overlay"></div>
                                <div class="content">
                                    <h4>Muiderslot</h4>
                                    <p>
                                        Rijksmuseum Muiderslot is een complexe & spannende
                                        opdracht waarin meer dan 22.000 maandelijkse bezoekers over heel de wereld gebruik maken van mijn creaties.
                                    </p>
                                </div>
                                <a href="" class="btn white" >Lees Meer</a>
                            </div>
                            <div class="portfolio__item muiderslot" style="background-image: url({{asset('/images/portfolio/ian.jpg')}}) ">
                                <div class="overlay"></div>
                                <div class="content">
                                    <h4>Ian Remeijsen</h4>
                                    <p>
                                        Acteur Ian Remeijsen had een website nodig om uit te blinken als acteur, 
                                        een persoonlijke en zelf geïnspireerde website is het eindresulstaat.
                                    </p>
                                </div>
                                <a href="" class="btn white" >Lees Meer</a>
                            </div>
                            <div class="portfolio__item muiderslot" style="background-image: url({{asset('/images/portfolio/Bluetravel.jpg')}}) ">
                                <div class="overlay"></div>
                                <div class="content">
                                    <h4>BLUEtravel</h4>
                                    <p>
                                        Een geweldige reis boeken via een mooie en duidelijke website, 
                                        BLUEtravel geeft juist aan waarom UX-IU een belangrijk aspect is.
                                    </p>
                                </div>
                                <a href="" class="btn black" >Lees Meer</a>
                            </div>
                            <div class="portfolio__item">
                                test
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
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                        @csrf
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
                                <div class="blur __two"></div>
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
                                <button name="submit" type="submit" class="btn">Verstuur</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <h4>Project starten?</h4>
                        <p>Tijd voor iets nieuws? vraag een offerte aan via nwave of kom in contact!</p>
                        <a href="https://nwave.nl" class="btn">Naar nwave</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
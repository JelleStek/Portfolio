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
                        <div class="background">
                            <div class="fade one"></div>
                            <div class="fade two"></div>
                            <div class="fade three"></div>
                            <div class="fade four"></div>
                            <div class="fade five"></div>
                            <div class="fade six"></div>
                            <div class="fade seven"></div>
                        </div>
                        <div class="trigger"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="image-holder intro"><img src="{{asset('/images/homepage/intro.png')}}" alt=""></div>
                </div>
            </div>
            <div class="mt-5"></div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h3>Over mij</h3>
                    <div class="divider"></div>
                    <p>Ik ben Jelle Stekelenburg, een web developer met 3+ jaar ervaring in development. Sinds mijn 12e
                        ben ik altijd bezig geweest met digitale creatie, al ging het om Youtube video's maken, Creatief
                        bezig zijn binnen Photoshop of de technieken leren van alles wat ik deed.</p>
                    <p>Ik zie mijzelf als een gedreven en positieve developer die zichzelf altijd wilt verbeteren in het
                        geen wat ik doe. Ik neem niet snel genoegen met het geen wat ik maak en leer mezelf steeds
                        nieuwe technieken aan.</p>
                    <p>Momenteel ben ik bezig met mijn eerste jaar als Software engineer op de Hogeschool van Amsterdam,
                        maar hier ben ik niet begonnen. Mijn development avonturen zijn begonnen op het Mediacollege
                        Amsterdam waar ik in 2021 geslaagd ben voor Media-development diploma. Binnen deze drie-jarige
                        opleiding heb ik leren werken met html, php, Javascript, (s)css en frameworks zoals Laravel en
                        Wordpress.</p>
                    <div class="socials">
                        <ul>
                            <li><a href="https://github.com/JelleStek"><img src="{{asset('/images/icons/github.png')}}"
                                                                            alt=""></a></li>
                            <li><a href="https://www.linkedin.com/in/jelle-stekelenburg/"><img
                                            src="{{asset('/images/icons/linkedin.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image-box">
                        <img src="{{asset('/images/homepage/me.jpg')}}" alt="Foto van mij (Jelle Stekelenburg)">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h3>Portfolio</h3>
                        <div class="divider"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="__img">
                            <img src="{{asset('/images/portfolio/nwave.jpg')}}" alt="">
                        </div>
                        <div class="__title">
                            <h4>nwave</h4>
                            <div class="divider"></div>
                        </div>
                        <div class="__body">
                            <p>nwave is een kleinschalig bedrijf van vrienden en mij waardoor wij freelance werk kunnen
                                doen voor diverse klanten.</p>
                            <a class="btn" href="">Lees meer</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="__img">
                            <img src="{{asset('/images/portfolio/ian.jpg')}}" alt="">
                        </div>
                        <div class="__title">
                            <h4>Ian remeijsen</h4>
                            <div class="divider"></div>
                        </div>
                        <div class="__body">
                            <p>Een website over een jonge acteur die hulp vroeg bij zijn portfolio. Aan de hand van wensen en ideeën van de klant is de website gevormd.</p>
                            <a class="btn" href="">Lees meer</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h2>Heeft u vragen? neem contact op</h2>
                    <a href="" class="btn">contact</a>
                </div>
            </div>
        </div>
    </section>

@endsection
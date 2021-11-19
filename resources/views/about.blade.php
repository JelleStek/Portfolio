@extends('template/template')

@section('content')

    <section class="sub-hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="blur __one">
                        <img src="{{asset('/images/about/me.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Wie ben ik en wat doe ik?</h1>
                    <p>
                        Ik ben Jelle Stekelenburg, een web-developer en student.
                        Momenteel zit ik in mijn eerste jaar als software engineer op
                        de Hogeschool Amsterdam. Ook heb ik een MBO diploma als
                        Mediadeveloper op het Mediacollege Amsterdam die ik in 2021
                        Behaald heb.
                    </p>
                    <p>
                        Hieronder is meer te vinden of wie ik ben, wat ik doe en meer!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="quick-facts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Quick facts<span class="punt">.</span></h2>
                </div>

                <div class="col-xl-2 col-lg-3 col-6">
                    <div class="fact">
                        <div class="__icon">
                            <img src="{{asset("/images/icons/desktop.png")}}" alt="Computer Icon">
                        </div>
                        <div class="__divider"></div>
                        <div class="__body">
                            <p>Bekend met o.a. Windows & MacOS</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-6">
                    <div class="fact">
                        <div class="__icon">
                            <img src="{{asset("/images/icons/design.png")}}" alt="Design tool Icon">
                        </div>
                        <div class="__divider"></div>
                        <div class="__body">
                            <p>Creatief ingesteld, Pixel perfect</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-6">
                    <div class="fact">
                        <div class="__icon">
                            <img src="{{asset("/images/icons/idea.png")}}" alt="Idea (head) Icon">
                        </div>
                        <div class="__divider"></div>
                        <div class="__body">
                            <p>Houd van feedback, Teamplayer</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-6">
                    <div class="fact">
                        <div class="__icon">
                            <img src="{{asset("/images/icons/clock.png")}}" alt="Clock Icon">
                        </div>
                        <div class="__divider"></div>
                        <div class="__body">
                            <p>Leergierig, Skill learner</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-6">
                    <div class="fact">
                        <div class="__icon">
                            <img src="{{asset("/images/icons/mortarboard.png")}}" alt="School Icon">
                        </div>
                        <div class="__divider"></div>
                        <div class="__body">
                            <p>Snelle leerling</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="experiences">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blur __one">
                        <h2>Ervaring<span class="punt">.</span></h2>
                        <p>Een tijdlijn van mijn ervaringen</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="__item" style="background-image: url('{{asset('/images/about/justbetter.png')}}')">
                        <h3>JustBetter</h3>
                        <h5>Stage - Feb 2020 t/m Jun 2020</h5>
                        <p>JustBetter, gevestigd in Alkmaar, Noord-Holland is gespecialiseerd in Laravel en Magento 2
                            development.</p>
                        <p>Bij deze stage heb ik leren werken met o.a. Laravel, MacOS, PHP & CSS</p>
                        <p>Door Corona heb ik het grootste deel van deze stage helaas thuis moeten volgen, dit heeft er
                            voor gezorgd dat ik moeite had mij de motiveren binnen dit bedrijf. Dit kwam mede omdat ik
                            geen echte opdrachten die klantgericht waren deed, ik kreeg huiswerk opdrachten waardoor
                            deze stage meer ging lijken op een schoolproject en niet een stage.</p>
                        <a target="_blank" href="https://justbetter.nl/" class="btn float">Naar JustBetter</a>
                        <p class="number">1</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="__item" style="background-image: url('{{asset('/images/about/ydm.png')}}')">
                        <h3>Your Dutch Media</h3>
                        <h5>Stage - Jul 2020 t/m Jan 2021</h5>
                        <p>Your Dutch Media is een bedrijf wat zich focust op online creatie zoals: Websites, Webshops
                            en Design</p>
                        <p>Bij deze stage heb ik geleerd te werken met o.a. Bootstrap, SASS, Wordpress theme
                            development, PHP, Laravel, Javascript, Jquery en Wordpress plugins</p>
                        <p>In mijn periode bij Your Dutch Media heb ik geleerd te werken met klanten en heb ik een goed
                            zicht kunnen krijgen op het bedrijfsleven. In de 7 maanden dat ik hier gewerkt heb is mijn
                            kennis binnen front-end development erg gegroeid.</p>
                        <a target="_blank" href="https://yourdutchmedia.nl/" class="btn float">Naar Your Dutch Media</a>
                        <p class="number">2</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="__item" style="background-image: url('{{asset('/images/about/nwave.png')}}')">
                        <h3>nwave</h3>
                        <h5>freelance - feb 2020 t/m Heden</h5>
                        <p>nwave is een bedrijf opgericht door mij waarin ik freelance werk doe.</p>
                        <p>nwave is een verfrissend en jong bedrijf dat zich focust op online creaties. Wij
                            specialiseren in het creëren van websites en webshops, marketing en het halen van betere
                            prestaties binnen zoekmachines waaronder Google.</p>
                        <a target="_blank" href="https://nwave.nl" class="btn float">Naar nwave</a>
                        <p class="number">3</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="__item" style="background-image: url('{{asset('/images/about/boei17.png')}}')">
                        <h3>Boei17</h3>
                        <h5>Part-time - jul 2021 t/m Heden</h5>
                        <p>Boei17 is een specialist in het maken van Wordpress websites en webshops</p>
                        <p>Binnen Boei17 is het mijn taak als front-end developer om designs om te zetten in functionele
                            Wordpress websites, hiervoor is het van belang om alles pixel perfect over te laten komen
                            met het design dat gegeven is.</p>
                        <a target="_blank" href="https://boei17.nl/" class="btn float">Naar nwave</a>
                        <p class="number">4</p>
                    </div>
                </div>
                <div class="blur __two"></div>
            </div>
        </div>
    </section>

@endsection
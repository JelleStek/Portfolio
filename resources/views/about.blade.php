@extends('template/template')

@section('content')

    <section class="sub-hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <img src="{{asset('/images/portfolio/nwave.jpg')}}" alt="">
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
            <div class="row align-items-center text-center">
                <div class="col-12">
                    <h2>Ervaring<span class="punt">.</span></h2>
                    <p>Een tijdlijn van mijn ervaringen</p>
                </div>
                <div class="col-12">
                    <img src="{{asset('/images/about/timeline.jpg')}}" alt="Timeline of my experiences">
                </div>
            </div>
        </div>
    </section>

@endsection
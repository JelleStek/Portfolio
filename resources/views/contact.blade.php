@extends('template/template')

@section('content')


    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Neem contact op<span class="punt">.</span></h2>
                </div>
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
            </div>
        </div>
    </section>

@endsection
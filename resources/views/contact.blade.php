@extends('layouts.layouts')
@section('content')
    <div class="bg">
        <div class="bg-top-about">
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-7 text-md-left mt-5 bg-text">
                        <h2 class="h2 h1-responsive text-uppercase bg-dark">About The Agency</h2>

                        <h5 class="h5 text-uppercase">Welcome to Lian</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="office-info" class="office-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="text-uppercase">Office Info</h3>
                    <h6>{{$contact->office_info??''}}</h6>
                    <div class="hr"></div>
                    <div class="hours-address">
                        <p class="hours"><span>Office Hours: </span>{{$contact->office_hours??''}}</p>
                        <p class="address"><span>Address: </span>{{$contact->address??''}}</p>
                    </div>
                    <div class="tel">
                        <p><a href="Tell:  {{$contact->tel??''}}"><span>Tell: </span>{{$contact->tel??''}}</a></p>
                        <p><a href="Fax:  {{$contact->fax??''}}"><span>Fax: </span>{{$contact->fax??''}}</a></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form id="contact-form">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea id="message" name="msg" rows="2" class="form-control md-textarea" placeholder="Message"></textarea>
                                </div>
                                <div id="success" class="d-none alert alert-success" role="alert" data-success-message>
                                    Дякуємо, ми зв'яжимося з вами протягом 24 год!
                                </div>
                                <div class="er d-none alert alert-danger" role="alert" data-error-message>
                                    Будь ласка, заповніть всі поля правильно.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                @if(env('GOOGLE_RECAPTCHA_KEY'))
                                        <div class="col-md-12 text-right">
                                            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                                        </div>
                                @endif
                                @if($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" style="display: block">
                                        <strong>{{$errors->first('g-recaptcha-response')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <section id="our-map">
        <div class="row">
            <div class="col-lg-12">
                <!--Meta map-->
            </div>
        </div>
    </section>
    <section id="our-values" class="our-values" >
        <div class="container">
            <div class="row">
                <div class="values">
                    <div class="row justify-content-center pt-5">
                        <div class="col-lg-6 text-center">
                            <h3 class="text-uppercase pb-2">Our Values</h3>
                            <p class="line-height2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img-fluid" src="images/img1.png">
                            <h5 class="text-uppercase my-4">Who We Are</h5>
                            <p class="line-height2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                        </div>
                        <div class="col-lg-4">
                            <img class="img-fluid" src="images/img2.png">
                            <h5 class="text-uppercase my-4">Our Vision</h5>
                            <p class="line-height2">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.</p>
                        </div>
                        <div class="col-lg-4">
                            <img class="img-fluid" src="images/img3.png">
                            <h5 class="text-uppercase my-4">Our Mission</h5>
                            <p class="line-height2">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

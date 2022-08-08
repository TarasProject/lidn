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

    <section id="about_content" class="about_content" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 shutterstock2"><img class="img-fluid" src="images/shutterstock2.png"></div>
                <div class="col-lg-6 our-story-skills">
                    <h5 class="text-uppercase">Our Story</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                    <h5 class="text-uppercase">Our Skills</h5>
                    <h6 class="h6">Photoshop</h6>
                    <div class="progress progres photoshop">
                        <div class="progress-bar progres-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                             style="width:90%"></div>
                        <div class="circle"></div>
                        <div class="rectangle">90</div>
                    </div>
                    <h6 class="h6">Branding</h6>
                    <div class="progress progres branding">
                        <div class="progress-bar progres-bar bg-secondary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                             style="width:95%"></div>
                        <i class="circle"></i>
                        <div class="rectangle">95</div>
                    </div>
                    <h6 class="h6">Photography</h6>
                    <div class="progress progres photography">
                        <div class="progress-bar progres-bar bg-secondary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                             style="width:50%"></div>
                        <i class="circle"></i>
                        <div class="rectangle">50</div>
                    </div>
                    <h6 class="h6">Web Design</h6>
                    <div class="progress progres web-design">
                        <div class="progress-bar progres-bar bg-secondary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                             style="width:85%"></div>
                        <i class="circle"></i>
                        <div class="rectangle">85</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center title-cards">
                    <h3 class="text-uppercase">Awesome Team</h3>
                    <p class="line-height2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card cards">
                        <img class="card-img-top" src="images/hue_saturation-1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Albert Thanh</h5>
                            <p>CEO/Founder</p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed diam nonu mmy nibh euis mod tinci </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card cards">
                        <img class="card-img-top" src="images/hue_saturation-2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">CJenn Pereira</h5>
                            <p>CEO/Founder</p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed diam nonu mmy nibh euis mod tinci</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card cards">
                        <img class="card-img-top" src="images/hue_saturation-3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Card title</h5>
                            <p>CEO/Founder</p>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed diam nonu mmy nibh euis mod tinci</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop


@extends('layouts.layouts')
@section('content')
    <div class="bg">
        <div class="bg-top-blog">
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-7 text-md-left mt-5 bg-text">
                        <h2 class="h2 h1-responsive text-uppercase bg-dark">LATEST PROJECTS</h2>

                        <h5 class="h5 text-uppercase">We Deliver Quality</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="single-post" class="single-post row">

        <div class="container col-12 ml-auto">
            <div class="single-post-title mt-5">
                <h3 class="text-uppercase text-center">{{$blogpost->title??''}}</h3>
                <p class="date pb-2 text-center">
                    <span>by {{$blogpost->author??''}}</span>
                    <span class="px-4">{{$blogpost->created_at->format('Y-m-d')??''}}</span>
                    <span><i class="far fa-heart"></i>324 likes</span>
                </p>
            </div>
            <div class="single-post-img text-center">
                <img class="img-fluid" src="{{$blogpost->image?asset('storage/'.$blogpost->image):asset('storage/users/default.png')}}" alt="post-img">
            </div>
            <div class="single-post-text mt-5">
                    <p class="line-height2">{{$blogpost->short_text??''}}</p>
                    <p class="line-height2">{{$blogpost->full_text??''}}</p>
{{--                <p class="line-height2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>--}}

{{--                <p class="line-height2">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>--}}
{{--            </div>--}}
{{--            <div class="single-post-text-p-0">--}}
{{--                <p class="line-height2">--}}
{{--                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="single-post-text mt-4">--}}
{{--                <h6 class="text-uppercase">This is a Heading</h6>--}}

{{--                <p class="line-height2">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>--}}

{{--                <p class="line-height2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue.</p>--}}
            </div>
            <div class="single-post-form">
                <div class="single-post-form-title text-uppercase my-5 text-center"><h5>Leave a Comment</h5></div>
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-form">
                                <input type="text" id="email" name="email" class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-form">
                                <input type="text" id="text" name="text" class="form-control" placeholder="Website">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark text-uppercase">Send message</button>
                    </div>
                </form>

            </div>
        </div>

    </section>
@stop


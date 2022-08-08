@extends('layouts.layouts')
@section('content')
    <div class="bg">
        <div class="bg-top-portfolio">
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
    <div class="prevNext-portDetails">
        <div class="container">
            <button type="button" id="prev" class="btn btn-light btn-prev text-uppercase"><i class="fas fa-chevron-left"></i>Previous</button>
            <button type="button" id="next" class="btn btn-light btn-next text-uppercase">Next<i class="fas fa-chevron-right"></i></button>
            <a href="{{route('project')}}"><button type="button" id="all" class="btn btn-light btn-showAll  text-uppercase"><i class="fas fa-ellipsis-v"></i><i class="fas fa-bars"></i>Show All</button></a>
        </div>
    </div>
    <div class="portDetails-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 agency">
                    <h3 id="title" class="text-uppercase">{{$project->title??''}}</h3>
                    <div class="agency-description pb-2">
                        <p id="brand">{{$project->brand??''}}</p>
                        <hr>
                        <p id="created_at" class="d-inline date pb-2">{{$project->created_at->format('Y-m-d')??''}}</p>
                        <a href="" id="like" ><small class="pl-5"><i class="far fa-heart"></i><span class="project-col">{{$project->like??'0'}}</span>likes</small></a>
                        <p id="text" class="line-height2">{{$project->text??''}}</p>
                    </div>
                    <hr>
                    <div class="role-on-project pt-2">
                        <p class="text-uppercase">Role On Project:</p>
                        <p>Project Designer, Lead Designer, Markerting Head</p>
                    </div>
                    <div class="tag pt-3">
                        <p class="text-uppercase">Tags:</p>
                        <p>Mobile App, UI/UX design</p>
                    </div>
                    <div class="btns-ss">
                        <div class="share pr-3">
                            <button type="button" class="btn btn-secondary btn-share"><i class="fas fa-share-alt pr-2"></i>Share</button>
                        </div>
                        <div id="social-links" class="social social-links-portfolio" style="display: none">
                            <ul class="d-flex justify-content-center">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://jorenvanhocht.be" class="social-button " id=""><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text=my share text&amp;url=http://jorenvanhocht.be" class="social-button " id=""><span class="fab fa-twitter"></span></a></li>
                                <li><a href="https://plus.google.com/share?url=http://jorenvanhocht.be" class="social-button " id=""><span class="fab fa-google-plus-g"></span></a></li>
                                <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://jorenvanhocht.be&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button " id=""><span class="fab fa-linkedin-in"></span></a></li>
                                <li><a href="https://wa.me/?text=http://jorenvanhocht.be" class="social-button " id=""><span class="fab fa-whatsapp"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 slide">
                    @if($project->img->count()===0)
                        <h2 id="no-foto">There are no photos in the project</h2>
                    @endif
                    <div id="sl" class="sl">
                        @foreach($project->img as $img)
                            <div class="sl__slide"><a href="#"><img src="{{$img->name_img?asset('storage/'.$img->name_img):asset('storage/users/default.png')}}" alt="картинка слайда" class="sl_img"></a></div>
                        @endforeach
                    </div>
                    <div id="sl2" class="sl2">
                        @foreach($project->img as $img)
                        <div class="sl2__slide"><img src="{{$img->name_img?asset('storage/'.$img->name_img):asset('storage/users/default.png')}}" alt="img"></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="related-works">
                <div class="row justify-content-center pt-5">
                    <div class="col-lg-6 text-center">
                        <h3 class="text-uppercase pb-2">Related Works</h3>
                        <p class="line-height2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <div id="related-works-content" class="row">
                    @foreach($projects as $p)
                        @if(\App\Models\Attribute::find($p->attr_id)->name_attr === \App\Models\Attribute::find($project->attr_id)->name_attr)
                        <div class="col-lg-4">
                            <a href="{!! route('showPortfolio', [
                                    'id' => $p->id ,
                                    'slug' => str_slug($p->title)
                                    ])!!}"><img class="img-fluid" src="{{$p->image?asset('storage/'.$p->image):asset('storage/users/default.png')}}" alt="image_project">
                            </a>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')
    <script>
        document.querySelector('.navbar-expand-lg').classList.remove('navbar-color');
        var projectEvent = '';
        var projectID = "{{ $project->id}}";
        var projectSlug ="{{$project->title}}";
        var routProjectID ='/portfolio/' + projectID + '/' + projectSlug + '.html';
        var asset = "{{asset('storage/')}}";
            document.getElementById("prev").onclick = function prev() {
                projectEvent = 'prev';
            };
            document.getElementById("next").onclick = function next() {
                projectEvent = 'next';
            };
        var token = "{{ Session::token() }}";
        var routProjectLike = "{{route('like')}}";
    </script>
@stop

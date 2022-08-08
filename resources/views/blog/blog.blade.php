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
    <section id="body" class="body">
        <div class="container">
            <div class="images">
                <div class="row post">
                    <div class="col-8">
                        <div class="column-2">
                            @foreach($blogposts as $blogpost)
                            <div class="row_panel">
                                <a href="{!! route('showBlogpost', [
                                'id' => $blogpost->id ,
                                'slug' => str_slug($blogpost->title)
                                ])!!}">
                                    <div class="card border-0">
                                        <img class="card-img-top" src="{{$blogpost->image?asset('storage/'.$blogpost->image):asset('storage/users/default.png')}}" alt="Card image cap">
                                        <div class="card-body post-card-body">
                                            <div class="blog-post-title">
                                                <h4>{{$blogpost->title??''}}</h4>
                                            </div>
                                            <div class="name-author-bolg">
                                                <p><i class="fas fa-user mr-2"></i>by {{$blogpost->author??''}}</p>
                                            </div>
                                            <div class="text-blog">
                                                <p>{{$blogpost->short_text??''}}</p>
                                            </div>
                                            <div class="row last-row">
                                                <div class="col-8 date-blog">
                                                    <p><i class="far fa-calendar mr-2"></i>on {{$blogpost->created_at->format('Y-m-d')??''}}</p>
                                                </div>
                                                <div class="col-4 ml-auto share-like-blog text-right">
                                                    <i class="fas fa-share-alt mr-2"></i>
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row_column sidebar">
                            <div class="row_panel search-bl-pg">
                                <form class="card card-sm">
                                    <div class="card-body row no-gutters align-items-center search-card-body">
                                        <div class="col">
                                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-lg" type="submit"><i class="fas fa-search h4 text-body m-0"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row_panel">
                                <h5 class="sidebar-title text-uppercase m-0">Recent Posts</h5>
                                <div class="recent-post">
                                    <div class="recent-post-item d-flex">
                                        <div class="recent-post-img">
                                            <img src="../images/recent-post-img1.png">
                                        </div>
                                        <div class="recent-post-block">
                                            <h6 class="recent-post-title">Lorem ipsum dolor sit amet, consec</h6>
                                            <p class="recent-post-date">July 5, 2016</p>
                                        </div>
                                    </div>
                                    <div class="recent-post-item d-flex">
                                        <div class="recent-post-img">
                                            <img src="../images/recent-post-img2.png">
                                        </div>
                                        <div class="recent-post-block">
                                            <h6 class="recent-post-title">Lorem ipsum dolor sit amet, consec</h6>
                                            <p class="recent-post-date">July 5, 2016</p>
                                        </div>
                                    </div>
                                    <div class="recent-post-item d-flex">
                                        <div class="recent-post-img">
                                            <img src="../images/recent-post-img3.png">
                                        </div>
                                        <div class="recent-post-block">
                                            <h6 class="recent-post-title">Lorem ipsum dolor sit amet, consec</h6>
                                            <p class="recent-post-date">July 5, 2016</p>
                                        </div>
                                    </div>
                                    <div class="recent-post-item d-flex">
                                        <div class="recent-post-img">
                                            <img src="../images/recent-post-img4.png">
                                        </div>
                                        <div class="recent-post-block">
                                            <h6 class="recent-post-title">Lorem ipsum dolor sit amet, consec</h6>
                                            <p class="recent-post-date">July 5, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row_panel">
                                <h5 class="sidebar-title text-uppercase m-0">Popular tags</h5>
                                <div class="tags-post">
                                    <button type="button" class="btn btn-outline-dark">construction</button>
                                    <button type="button" class="btn btn-outline-dark">engineering</button>
                                    <button type="button" class="btn btn-outline-dark">architecture</button>
                                    <button type="button" class="btn btn-outline-dark">structural design</button>
                                    <button type="button" class="btn btn-outline-dark">civil engineer</button>
                                    <button type="button" class="btn btn-outline-dark">industrial</button>
                                    <button type="button" class="btn btn-outline-dark">management</button>
                                    <button type="button" class="btn btn-outline-dark">mechanical</button>
                                </div>
                            </div>
                            <div class="row_panel">
                                <h5 class="sidebar-title text-uppercase m-0">Instagram</h5>
                                <div class="instagr row">
                                    <div class="col-lg-4 col-6"><img src="../images/instagr-img1.png"></div>
                                    <div class="col-lg-4 col-6"><img src="../images/instagr-img2.png"></div>
                                    <div class="col-lg-4 col-6"><img src="../images/instagr-img3.png"></div>
                                    <div class="col-lg-4 col-6"><img src="../images/instagr-img4.png"></div>
                                    <div class="col-lg-4 col-6"><img src="../images/instagr-img5.png"></div>
                                    <div class="col-lg-4 col-6"><img src="../images/instagr-img6.png"></div>
                                    <div class="col-lg-4 col-6"><img src="../images/instagr-img7.png"></div>
                                    <div class="col-lg-4 col-6"><img src="../images/instagr-img8.png"></div>
                                    <div class="col-lg-4 col-6 m-auto"><img src="../images/instagr-img9.png"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-load d-flex justify-content-center">
                <a class="btn btn-load-more text-uppercase">Read More</a>
            </div>
        </div>
    </section>
@stop


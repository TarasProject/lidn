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
    <section id="body" class="body">
        <div class="container">
            <div class="tab-nav portfolio-menu">
                <ul class="nav text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-filter="*">All</a>
                    </li>
                    @foreach($attributes as $attribute)
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-filter="{{'.'.$attribute['name_attr']}}">{{$attribute['name_attr']}}</a>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="images">
                <div class="row portfolio-item">
                    @foreach($projects as $project)
                        <div class="item {{\App\Models\Attribute::find($project->attr_id)->name_attr}}">
                            <div class="item-content">
                                <a href="{!! route('showPortfolio', [
                                    'id' => $project->id ,
                                    'slug' => str_slug($project->title)
                                    ])!!}"><img src="{{$project->image?asset('storage/'.$project->image):asset('storage/users/default.png')}}" alt="image_project">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="btn-load d-flex justify-content-center">
                <a class="btn btn-load-more" href="">Read More</a>
            </div>
        </div>
    </section>
@stop


@extends('layouts.layouts')
@section('content')
<section id="slider" class="slider">
    <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/slider.png" alt="First slide">
                    <div class="carousel-caption">
                        <h2>Design & Branding</h2>
                        <small>
                            We Deliver Quality Results
                        </small>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/slider.png" alt="Second slide">
                    <div class="carousel-caption">
                        <h2>Design & Branding</h2>
                        <small>
                            We Deliver Quality Results
                        </small>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/slider.png" alt="Third slide">
                    <div class="carousel-caption">
                        <h2>Design & Branding</h2>
                        <small>
                            We Deliver Quality Results
                        </small>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

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
            <a class="btn btn-load-more" href="#" data-filter="*">Read More</a>
        </div>
    </div>
</section>
@stop


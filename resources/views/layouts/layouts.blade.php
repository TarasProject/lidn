<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Lidn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ mix('/css/mix.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header id="header" class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand {{Request::is('/')?'active':''}}" href="{{route('index')}}"><img src="{{asset('images/logo.png')}}" alt="image_logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="menu navbar-nav ml-auto text-uppercase">
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('/')?'active':''}}" href="{{route('index')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('about')?'active':''}}" href="{{route('about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('portfolio/*')?'active':''}}" href="{{route('project')}}">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('blog/*')?'active':''}}" href="{{route('blogpost')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('contact')?'active':''}}" href="{{route('contact')}}">Contact</a>
                            </li>
                            <li class="nav-item search">
                                <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        @yield('content')
        @yield('javascript')

        <footer id="footer" class="footer">
            <div class="container-fluid p-0">
                <div class="d-flex flex-column">
                    <div class="logo d-flex justify-content-center">
                        <a class="navbar-brand {{Request::is('/')?'active':''}}" href="{{route('index')}}"><img src="{{asset('images/logo.png')}}" alt="image_logo"></a>
                    </div>
                    <div id="social-links" class="social">
                            <ul class="d-flex justify-content-center">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://jorenvanhocht.be" class="social-button " id=""><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text=my share text&amp;url=http://jorenvanhocht.be" class="social-button " id=""><span class="fab fa-twitter"></span></a></li>
                                <li><a href="https://plus.google.com/share?url=http://jorenvanhocht.be" class="social-button " id=""><span class="fab fa-google-plus-g"></span></a></li>
                                <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://jorenvanhocht.be&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button " id=""><span class="fab fa-linkedin-in"></span></a></li>
                                <li><a href="https://wa.me/?text=http://jorenvanhocht.be" class="social-button " id=""><span class="fab fa-whatsapp"></span></a></li>
                            </ul>
                    </div>
                    <div class="footer_text d-flex justify-content-center">
                        <p>&copy 2019 <span>Mulitix theme</span> by themeforces all rights reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="{{ asset('/js/mix.js') }}"></script>
    </body>
</html>

@extends('layouts.app')

@section('content')
<style>
    .parallax-search.home-1 {
      position: relative;
      background: url("{{ asset('/assets/images/bg/bg-main-home.jpg') }}") no-repeat center top;
      background-size: cover;
      background-attachment: fixed !important;
      width: 100%;
      height: 85vh;
    }
</style>
<section id="hero-area" class="parallax-search overlay home-1" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container aos-init aos-animate" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <div class="welcome-text">
                            <h1 class="h1">Decor For
                                <br class="d-md-none">
                                <span class="typed border-bottom">House </span><span
                                    class="typed-cursor typed-cursor--blink">|</span>
                            </h1>
                            <p class="mt-4">Our experience ensures that your projects will be done right and
                                with the upmost professionalism.</p>
                        </div>
                        <a href="{{ route('about') }}" class="btn btn-default btn-theme-colored2 btn-xl mt-5">Read More</a>
                        <a href="{{ route(name: 'contact') }}" class="btn btn-dark btn-theme-colored btn-xl mt-5">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recently portfolio bg-white-3">
    <div class="container-fluid recently-slider">
        <div class="section-title">
            <h3>Recently</h3>
            <h2>Works</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                @foreach($projects as $project)
                    <a href="{{ route('projects.show', $project) }}" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-center" style="background-image: url({{ asset('/storage/'.$project->poster_url) }});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title text-uppercase">{{ $project->slug }}</div>
                            <div class="recent-price">{{ $project->tag }}</div>
                            <div class="house-details">{{ $project->month }}<span>-</span>{{ $project->year }}</div>
                        </div>
                        <div class="view-proper">View Details</div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="info-help h18">
    <div class="container">
        <div class="row info-head">
            <div class="col-lg-12 col-md-8 col-xs-8">
                <div class="info-text" data-aos="fade-up">
                    <h3 class="text-center mb-0">Why Choose Us</h3>
                    <p class="text-center mb-4 p-0">We offer perfect decor services</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-boxes-area">
    <div class="container">
        <div class="featured-boxes-inner">
            <div class="row m-0">
                <div class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                    <div class="single-featured-box">
                        <div class="icon color-fb7756"><img src="{{ asset('/assets/images/icons/quality.png') }}" width="85" height="85" alt=""></div>
                        <h3 class="mt-5">Exceptional Quality</h3>
                        <p>Our meticulous attention to detail ensures stunning decor that exceeds expectations.</p><a class="read-more-btn" href="project-details.html">Read More</a></div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                    <div class="single-featured-box">
                        <div class="icon color-facd60"><img src="{{ asset('/assets/images/icons/service.png') }}" width="85" height="85" alt=""></div>
                        <h3 class="mt-5">Personalized Service</h3>
                        <p>We tailor every design to your unique vision, creating unforgettable experiences.</p><a class="read-more-btn" href="project-details.html">Read More</a></div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                    <div class="single-featured-box">
                        <div class="icon color-1ac0c6"><img src="{{ asset('/assets/images/icons/team.png') }}" width="85" height="85" alt=""></div>
                        <h3 class="mt-5">Experienced Team</h3>
                        <p>Our seasoned professionals bring creativity and expertise to every event we decorate.</p><a class="read-more-btn" href="project-details.html">Read More</a></div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                    <div class="single-featured-box">
                        <div class="icon"><img src="{{ asset('/assets/images/icons/affordable.png') }}" width="85" height="85" alt=""></div>
                        <h3 class="mt-5">Affordable Elegance</h3>
                        <p>Enjoy luxurious event decor that fits your budget without compromising on style.</p><a class="read-more-btn" href="project-details.html">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio bg-white-5">
    <div class="container">
        <div class="section-title">
            <h3>Latest</h3>
            <h2>Projects</h2>
        </div>
        <div class="filters-group">
            <ul>
                <li class="active" data-filter="*">Show All</li>
                @foreach (\App\Models\Category::has('projects')->get() as $service)
                    <li data-filter=".{{ $service->slug }}">{{ $service->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="row portfolio-items">
            @foreach ($rProjects as $rProject)
                <div class="item col-lg-4 col-md-6 {{ $rProject->category->slug }}" data-aos="zoom-in">
                    <div class="single-portfolio">
                        <a href="{{ route('projects.show', $rProject) }}" class="portfolio-img">
                            <img src="{{ asset('/storage/'.$rProject->poster_url) }}" alt="" />
                        </a>
                        <div class="portfolio-text">
                            <a href="#"><h4>Project</h4></a>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
            
            <div class="item col-lg-4 col-sm-6 col-xs-12 landscapes last-item two">
            </div>
        </div>
    </div>
    <div class="box bg-3 mt-0">
        <a href="{{ route('projects') }}" class="button button--wayra button--border-thick button--text-upper button--size-s">View All</a>
    </div>
</section>

<section class="info-help h17">
    <div class="container">
        <div class="row info-head">
            <div class="col-lg-6 col-md-8 col-xs-8" data-aos="fade-right">
                <div class="info-text">
                    <h3>Transform Your Vision Today</h3>
                    <p class="pt-2">We create unforgettable moments with stunning designs tailored to your needs. Elevate every occasion with seamless planning and exceptional attention to detail.</p>
                    <div class="inf-btn pro">
                        <a href="{{ route('contact') }}" class="btn btn-pro btn-secondary btn-lg">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('content')
<section class="headings">
    <div class="text-heading">
        <div class="container">
            <h1 class="text-center">About Us</h1>
        </div>
    </div>
</section>
<div class="road">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="index.html">Home</a><span>»</span><span>About Us</span>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION HEADINGS -->

<!-- START SECTION ABOUT -->
<section class="who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-md-6 who">
                <img src="/assets/images/bg/about.jpg" alt="">
            </div>
            <div class="col-md-6 who-1">
                <div>
                    <h2 class="text-left mb-4">About <span>Experience Inoubliable</span></h2>
                </div>
                <div class="pftext">
                    <p>
                        Welcome to Experience Inoubliable, where we transform your events into memorable masterpieces. With a passion for design and a commitment to exceptional quality, we deliver decor services that leave lasting impressions.
                    </p>
                        
                    <p>
                        Every event is unique, and we honor that through a personalized approach, crafting designs that bring your vision to life. Backed by a team of experienced professionals, we handle every detail with creativity, precision, and care, ensuring stunning results from concept to execution.
                    </p>
                    
                    <p>
                        At Experience Inoubliable, we believe elegance should be accessible to everyone. That’s why we provide luxurious decor tailored to your budget, making every celebration unforgettable—whether it’s a wedding, corporate function, or intimate gathering.
                    </p>
                    <p>Let us turn your dreams into cherished memories.</p>
                </div>
                <!-- <div class="box bg-2">
                    <a href="about.html" class="button button--wayra button--border-thick button--text-upper button--size-s mb-5 mt-4">read More</a>
                    <img src="/assets/images/signature.png') }}" class="ml-5" alt="">
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION SERVICES -->
<section class="all-services bg-white-2">
    <div class="container">
        <div class="section-title">
            <h3>Our Professional</h3>
            <h2>Services</h2>
        </div>
        <div class="row mt-50">
            @foreach ($services as $service)
                <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                    <div class="item mb-30">
                        <div class=service-box>
                            <figure class="img-box">
                                <a href="{{ route('services.show', $service->slug) }}"><img src="{{ asset('/storage/'.$service->poster_url) }}" alt=""></a>
                                <figcaption class="default-overlay-outer">
                                    <div class="inner">
                                        <div class="content-layer"><a class="this-link btn btn-primary" href="{{ route('services.show', $service->slug) }}">Read more</a> </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="clearfix service-inner-box">
                                <div class="service-icon-box"><img src="{{ asset('/storage/'.$service->icon) }}" alt=""></div>
                                <div class="service-content-box" style="height:130px;">
                                    <h3><a href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a></h3>
                                    <p>{!! str_limit($service->description, 80) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END SECTION SERVICES -->
@endsection
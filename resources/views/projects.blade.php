@extends('layouts.app')

@section('content')
<section class="headings">
    <div class="text-heading">
        <div class="container">
            <h1 class="text-center">Projects</h1>
        </div>
    </div>
</section>
<div class="road">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="index.html">Home</a><span>»</span><span>Projects</span>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION HEADINGS -->

<!-- START SECTION PORTFOLIO -->
<section class="portfolio">
    <div class="container">
        <div class="filters-group">
            <ul>
                <li class="active" data-filter="*">Show All</li>
                <li data-filter=".people">Residential</li>
                <li data-filter=".landscapes">Commercial</li>
                <li data-filter=".web">Office</li>
                <li data-filter=".graphic">Hospitaly</li>
            </ul>
        </div>
        <div class="row portfolio-items">
            <div class="item col-lg-3 col-md-6 landscapes">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-1.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-1.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item col-lg-3 col-md-6 people">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-2.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-2.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item col-lg-3 col-md-6 people landscapes">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-3.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-3.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item col-lg-3 col-md-6 people landscapes">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-4.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-4.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item it2 col-lg-3 col-md-6 people">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-5.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-5.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item it2 col-lg-3 col-md-6 web">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-6.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-6.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item it2 col-lg-3 col-md-6 web">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-7.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-7.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item it2 col-lg-3 col-md-6 web graphic">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-8.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-8.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item col-lg-3 col-md-6 landscapes last-item">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-9.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-9.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item col-lg-3 col-md-6 people last-item">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-10.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-10.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item col-lg-3 col-md-6 people landscapes last-item one">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-11.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-11.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="item col-lg-3 col-sm-6 col-xs-12 people landscapes last-item two pt">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="{{ asset('/assets/images/project/p-12.jpg') }}" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="{{ asset('/assets/images/project/p-12.jpg') }}" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <a href="#"><h4>Portfolio</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO -->

@endsection
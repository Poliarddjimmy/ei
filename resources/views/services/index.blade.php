@extends('layouts.app')

@section('content')
<section class="headings">
    <div class="text-heading">
        <div class="container">
            <h1 class="text-center">Our Services</h1>
        </div>
    </div>
</section>
<div class="road">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="index.html">Home</a><span>»</span><span>Our Services</span>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION HEADINGS -->

<!-- START SECTION SERVICES -->
<section class="all-services">
    <div class="container">
        <div class="section-title">
            <h3>Our Professional</h3>
            <h2>Services</h2>
        </div>
        <div class="row mt-50">
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                <div class="item mb-30">
                    <div class=service-box>
                        <figure class="img-box">
                            <a href="residental-interior.html"><img src="{{ asset('/assets/images/services/s-1.jpg') }}" alt=""></a>
                            <figcaption class="default-overlay-outer">
                                <div class="inner">
                                    <div class="content-layer"><a class="this-link btn btn-primary" href="residental-interior.html">Read more</a> </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="clearfix service-inner-box">
                            <div class=service-icon-box><img src="{{ asset('/assets/images/services/2.png') }}" alt=""></div>
                            <div class=service-content-box>
                                <h3><a href="residental-interior.html">Residential Interior</a></h3>
                                <p>Lorem ipsum dolor sit amet solut, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                <div class="item mb-30">
                    <div class=service-box>
                        <figure class="img-box">
                            <a href="commercial-interior.html"><img src="{{ asset('/assets/images/services/s-2.jpg') }}" alt=""></a>
                            <figcaption class="default-overlay-outer">
                                <div class="inner">
                                    <div class="content-layer"><a class="this-link btn btn-primary" href="commercial-interior.html">Read more</a> </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="clearfix service-inner-box">
                            <div class=service-icon-box><img src="{{ asset('/assets/images/services/15.png') }}" alt=""></div>
                            <div class=service-content-box>
                                <h3><a href="commercial-interior.html">Commercial Interior</a></h3>
                                <p>Lorem ipsum dolor sit amet solut, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                <div class="item mb-30">
                    <div class=service-box>
                        <figure class="img-box">
                            <a href="office-interior.html"><img src="{{ asset('/assets/images/services/s-3.jpg') }}" alt=""></a>
                            <figcaption class="default-overlay-outer">
                                <div class="inner">
                                    <div class="content-layer"><a class="this-link btn btn-primary" href="office-interior.html">Read more</a> </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="clearfix service-inner-box">
                            <div class=service-icon-box><img src="{{ asset('/assets/images/services/10.png') }}" width="53" alt=""></div>
                            <div class=service-content-box>
                                <h3><a href="office-interior.html">Office Interior</a></h3>
                                <p>Lorem ipsum dolor sit amet solut, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                <div class="item smb-30">
                    <div class=service-box>
                        <figure class="img-box">
                            <a href="hospitality-design.html"><img src="{{ asset('/assets/images/services/s-4.jpg') }}" alt=""></a>
                            <figcaption class="default-overlay-outer">
                                <div class="inner">
                                    <div class="content-layer"><a class="this-link btn btn-primary" href="hospitality-design.html">Read more</a> </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="clearfix service-inner-box">
                            <div class=service-icon-box><img src="{{ asset('/assets/images/services/14.png') }}" width="53" alt=""></div>
                            <div class=service-content-box>
                                <h3><a href="hospitality-design.html">Hospitality Design</a></h3>
                                <p>Lorem ipsum dolor sit amet solut, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                <div class="item smb-30">
                    <div class=service-box>
                        <figure class="img-box">
                            <a href="#"><img src="{{ asset('/assets/images/services/s-5.jpg') }}" alt=""></a>
                            <figcaption class="default-overlay-outer">
                                <div class="inner">
                                    <div class="content-layer"><a class="this-link btn btn-primary" href="#">Read more</a> </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="clearfix service-inner-box">
                            <div class=service-icon-box><img src="{{ asset('/assets/images/services/1.png') }}" width="53" alt=""></div>
                            <div class=service-content-box>
                                <h3><a href=#>Modern Furniture</a></h3>
                                <p>Lorem ipsum dolor sit amet solut, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                <div class="item">
                    <div class=service-box>
                        <figure class="img-box">
                            <a href="#"><img src="{{ asset('/assets/images/services/s-6.jpg') }}" alt=""></a>
                            <figcaption class="default-overlay-outer">
                                <div class="inner">
                                    <div class="content-layer"><a class="this-link btn btn-primary" href="#">Read more</a> </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="clearfix service-inner-box">
                            <div class=service-icon-box><img src="{{ asset('/assets/images/services/3.png') }}" width="53" alt=""></div>
                            <div class=service-content-box>
                                <h3><a href=#>Modular Kitchen</a></h3>
                                <p>Lorem ipsum dolor sit amet solut, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SERVICES -->

<!-- START SECTION TESTIMONIALS -->
<section class="testimonials bg-white-2">
    <div class="container">
        <div class="section-title">
            <h3>Our Customers</h3>
            <h2>Words</h2>
        </div>
        <div class="owl-carousel style1">
            <div class="test-1">
                <h3>Lisa Smith</h3>
                <img src="{{ asset('/assets/images/testimonials/ts-1.jpg') }}" alt="">
                <h6 class="mt-2">New York</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1">
                <h3>Jhon Morris</h3>
                <img src="{{ asset('/assets/images/testimonials/ts-2.jpg') }}" alt="">
                <h6 class="mt-2">Los Angeles</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star-o"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1">
                <h3>Mary Deshaw</h3>
                <img src="{{ asset('/assets/images/testimonials/ts-3.jpg') }}" alt="">
                <h6 class="mt-2">Chicago</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1">
                <h3>Gary Steven</h3>
                <img src="{{ asset('/assets/images/testimonials/ts-4.jpg') }}" alt="">
                <h6 class="mt-2">Philadelphia</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star-o"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1">
                <h3>Cristy Mayer</h3>
                <img src="{{ asset('/assets/images/testimonials/ts-5.jpg') }}" alt="">
                <h6 class="mt-2">San Francisco</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1">
                <h3>Ichiro Tasaka</h3>
                <img src="{{ asset('/assets/images/testimonials/ts-6.jpg') }}" alt="">
                <h6 class="mt-2">Houston</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star-o"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIALS -->
@endsection
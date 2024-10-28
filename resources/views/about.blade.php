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
                <img src="/assets/images/bg/about-us.jpeg" alt="">
            </div>
            <div class="col-md-6 who-1">
                <div>
                    <h2 class="text-left mb-4">About <span>Experience Inoubliable</span></h2>
                </div>
                <div class="pftext">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>
                </div>
                <div class="box bg-2">
                    <a href="about.html" class="button button--wayra button--border-thick button--text-upper button--size-s mb-5 mt-4">read More</a>
                    <img src="/assets/images/signature.png') }}" class="ml-5" alt="">
                </div>
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

<!-- START SECTION TEAM -->
<section class="team">
    <div class="container">
        <div class="section-title">
            <h3>Meet</h3>
            <h2>OUR TEAM</h2>
        </div>
        <div class="row team-all">
            <!--Team Block-->
            <div class="team-block col-lg-3 col-md-6 col-xs-12">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="our-team.html"><img src="{{ asset('/assets/images/team/t-1.png') }}" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="our-team.html">Arling Tracy</a></h3>
                        <div class="designation">Acountant</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-lg-3 col-md-6 col-xs-12">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="our-team.html"><img src="{{ asset('/assets/images/team/t-2.png') }}" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="our-team.html">Carls Jhons</a></h3>
                        <div class="designation">Financial Advisor</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-lg-3 col-md-6 col-xs-12 pb-none">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="our-team.html"><img src="{{ asset('/assets/images/team/t-3.png') }}" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="our-team.html">Katy Grace</a></h3>
                        <div class="designation">Team Leader</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-lg-3 col-md-6 col-xs-12 pb-none">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="our-team.html"><img src="{{ asset('/assets/images/team/t-4.png') }}" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="our-team.html">Mark Web</a></h3>
                        <div class="designation">Founder &amp; CEO</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEAM -->

<!-- START SECTION COUNTER UP -->
<section class="counterup">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="countr">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <p class="counter">200</p>
                    <h3>won awards</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="countr">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <p class="counter">300</p>
                    <h3>Happy clients</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="countr">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p class="counter">400</p>
                    <h3>Hours Worked</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="countr lt">
                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                    <p class="counter">250</p>
                    <h3>Our Projects</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER UP -->




@endsection
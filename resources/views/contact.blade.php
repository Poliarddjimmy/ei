@extends('layouts.app')

@section('content')
<section class="headings">
    <div class="text-heading">
        <div class="container">
            <h1 class="text-center">CONTACT US</h1>
        </div>
    </div>
</section>
<div class="road">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="index.html">Home</a><span>»</span><span>CONTACT US</span>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION HEADINGS -->

<!-- START SECTION CONTACT -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title ml-3">
            <h3>Have a Question?</h3>
            <h2>CONTACT US</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                    </div>
                    <div id="error" class="errorform">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                    </div>
                    <div class="box bg-3">
                        <button type="submit" id="submit-contact" class="button button--wayra button--border-thick button--text-upper button--size-s">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 info-touch">
                <h4>Keep In Touch</h4>
                <div class="my-info">
                    <div class="in1">
                        <div class="address">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> 95 South Park Ave.</p>
                        </div>
                        <div class="email">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> info@blanca.com</p>
                        </div>
                    </div>
                    <div class="in1">
                        <div class="phone">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> (234) 0200 17813</p>
                        </div>
                        <div class="whatssap">
                            <p><i class="fa fa-whatsapp" aria-hidden="true"></i> (234) 0200 17813</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->

<!-- START SECTION GOOGLE MAP -->
<div id="contact-map" class="map-area">
    <div id="googleMap" style="width:100%;height:500px;"></div>
</div>
<!-- END SECTION GOOGLE MAP -->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8kOYB_m_UPPC2xnEd7ddYKww8jO1819k"></script>
<script src="{{ asset('/assets/js/map.js') }}"></script>

@endsection
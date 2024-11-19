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
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bradenton, USA</p>
                        </div>
                        <div class="email">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:experienceinoubliable@gmail.com">experienceinoubliable@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="in1">
                        <div class="phone">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +1 941 877-4753</p>
                        </div>
                        <div class="whatssap">
                            <p><i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="https://wa.me/19418774753" target="_blank">+1 942 877-4753</a></p>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d226519.3402654993!2d-82.75210337295452!3d27.489031440396058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c3164fdea682f1%3A0xfa9d3b7d4ef1fd5a!2sBradenton%2C%20FL!5e0!3m2!1sen!2sus!4v1732030087198!5m2!1sen!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection
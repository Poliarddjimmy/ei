@extends('layouts.app')

@section('content')
<section class="headings">
    <div class="text-heading">
        <div class="container">
            <h1 class="text-center">Login</h1>
        </div>
    </div>
</section>
<div class="road">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="index.html">Home</a><span>»</span><span>Login</span>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION HEADINGS -->


<section id="contact" class="contact">
    <div class="container">
        <div class="section-title ml-3">
            <h3>Have an account?</h3>
            <h2>LOGIN TO YOUR DASHBOARD</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <form id="contactform" class="contact-form" name="contactform" method="post" action="{{ route('login') }}" novalidate>
                    @csrf
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                    </div>
                    <div id="error" class="errorform">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control input-custom input-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control input-custom input-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="box bg-3" style="display:inline;">
                        <button type="submit" id="submit-contact" class="button button--wayra button--border-thick button--text-upper button--size-s">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

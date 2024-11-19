@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('services') }}

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
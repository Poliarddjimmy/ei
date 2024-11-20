@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('projects.show', $project) }}

<section class="portfolio bg-white-2">
    <div class="container">
        <div class="row portfolio-items">
            @foreach ($project->images as $image)
                <div class="item col-lg-3 col-md-6">
                    <div class="single-portfolio">
                        <div class="portfolio-img">
                            <img src="{{ asset('/storage/'.$image->url) }}" alt=""/>
                            <div class="portfolio-view">
                                <div class="item-wrap">
                                    <a class="img-poppu" href="{{ asset('/storage/'.$image->url) }}" data-rel="lightcase:myCollection:slideshow">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <a href="javascript:void(0)"><h4>{{ $project->tag }}</h4></a>
                            <a href="javascript:void(0)"><h4>{{ $project->month }}<span>-</span>{{ $project->year }}</h4></a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="item col-lg-4 col-sm-6 col-xs-12 landscapes last-item two">
            </div>
        </div>
    </div>
</section>
@endsection
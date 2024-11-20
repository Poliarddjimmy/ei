@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('projects') }}

<section class="portfolio">
    <div class="container">
        <div class="filters-group">
            <ul>
                <li class="active" data-filter="*">Show All</li>
                @foreach (\App\Models\Category::has('projects')->get() as $service)
                    <li data-filter=".{{ $service->slug }}">{{ $service->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="row portfolio-items">
            @foreach ($projects as $project)
                <div class="item col-lg-4 col-md-6 {{ $project->category->slug }}" data-aos="zoom-in">
                    <div class="single-portfolio">
                        <a href="{{ route('projects.show', $project) }}" class="portfolio-img cursor-pointer">
                            <img src="{{ asset('/storage/'.$project->poster_url) }}" alt="" />
                        </a>
                        <div class="portfolio-text">
                            <a href="#"><h4 class="text-uppercase">{{ $project->slug }}</h4></a>
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
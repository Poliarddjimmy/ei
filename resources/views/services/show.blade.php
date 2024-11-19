@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('services.show', $service) }}

<section class="service-details bg-white-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 service-info">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('/storage/'.$service->poster_url) }}" alt="">
                        <div class="service-text bg-white-2">
                            <h3 class="mt-4">SERVICE <span class="font-weight-bold">OVERVIEW</span></h3>
                            {!! $service->description !!}
                        </div>
                    </div>
                </div>
                
                <div class="completed-projects pb-0">
                    <div class="container">
                        <h3>COMPLETED <span class="font-weight-bold">PROJECTS </span></h3>
                        <div class="row">
                            @forelse ($service->projects as $project)
                                <div class="col-md-4 cons hover-effect mb-4">
                                    <div class="choos">
                                        <a href="{{ route('projects.show', $project) }}">
                                            <figure><img src="{{ asset('/storage/'.$project->poster_url) }}" alt="" style="height:250px;"></figure>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-4 cons hover-effect">
                                    <div class="choos">No projects found.</div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <aside class="col-lg-3 col-md-12">
                <div class="widget-service-details car">
                    <div class="business-service">
                        <h5 class="font-weight-bold">Services List</h5>
                        <ul>
                            @foreach (getServices() as $ser)
                                <li class="{{ $ser->id === $service->id ? 'active' : null }}"><a href="{{ route('services.show', $ser->slug) }}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ $ser->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <br>
                    <div class="business-service">
                        <h5 class="font-weight-bold mb-4">Tags</h5>
                        <div class="tags d-flex flex-wrap">
                            @foreach ($service->tags as $tag)
                                <span><a href="javascript:void()" class="btn btn-outline-primary">{{ $tag }}</a></span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection
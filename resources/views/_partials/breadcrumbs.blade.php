@unless ($breadcrumbs->isEmpty())
    <section class="headings">
        <div class="text-heading">
            <div class="container">
                <h1 class="text-center">{{ $breadcrumbs->last()->title }}</h1>
            </div>
        </div>
    </section>
    <div class="road">
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if ($breadcrumb->url && !$loop->last)
                            <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a><span>»</span>
                        @else
                            <span>{{ $breadcrumb->title }}</span>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endunless
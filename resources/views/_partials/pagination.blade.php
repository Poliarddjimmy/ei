@if ($paginator->hasPages())
    <div class="row">
        <div class="dataTables_paginate">
            <ul class="pagination">
                <li class="paginate_button page-item">
                    @if ($paginator->onFirstPage())
                        <a href="javascript:void(0)" class="page-link">Previous</a>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="page-link">Previous</a>
                    @endif
                </li>

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="paginate_button page-item active"><a href="javascript:void(0)" class="page-link">{{ $page }}</a></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="paginate_button page-item active"><a href="javascript:void(0)" class="page-link">{{ $page }}</a></li>
                            @else
                                <li class="paginate_button page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                <li class="paginate_button page-item">
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" class="page-link">Next</a>
                    @else
                        <a href="javascript:void(0)" class="page-link">Next</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
@endif
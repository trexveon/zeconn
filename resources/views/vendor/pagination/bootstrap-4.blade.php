@if ($paginator->hasPages())
    <nav>
        <ul class="d-flex align-items-center justify-content-center flex-row">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class=" disabled d-flex align-items-center justify-content-center flex-row" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <img src="{{asset('img/arrowempdireitadeactivate.png')}}" alt="" class="last">
                </li>
            @else
                <li class="d-flex align-items-center justify-content-center flex-row">
                    <a  href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <img src="{{asset('img/arrowempdireita.png')}}" alt="" class="last">
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class=" disabled" aria-disabled="true">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class=" active d-flex align-items-center justify-content-center flex-row" aria-current="page">{{ $page }}</li>
                        @else
                            <li class="d-flex align-items-center justify-content-center flex-row"><a  href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="d-flex align-items-center justify-content-center flex-row">
                    <a  href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <img src="{{asset('img/arrowempdireita.png')}}" alt="" >
                    </a>
                </li>
            @else
                <li class=" disabled d-flex align-items-center justify-content-center flex-row" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <img src="{{asset('img/arrowempdireitadeactivate.png')}}" alt="">
                </li>
            @endif
        </ul>
    </nav>
@endif

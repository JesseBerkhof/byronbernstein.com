@if ($paginator->hasPages())
    <div class="flex items-center gray-600 mt-6">
        <div class="mx-auto">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="rounded px-3 py-2 cursor-not-allowed no-underline text-white">&laquo;</span>
            @else
                <a
                        class="rounded px-3 py-2 text-white hover:bg-purple-900 no-underline"
                        href="{{ $paginator->previousPageUrl() }}"
                        rel="prev"
                >
                    &laquo;
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-3 py-2 cursor-not-allowed no-underline text-white">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-3 py-2 bg-purple-700 rounded no-underline text-white">{{ $page }}</span>
                        @else
                            <a class="px-3 py-2 hover:bg-purple-700 rounded text-white no-underline" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="rounded px-3 py-2 hover:bg-purple-700 text-white no-underline" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
            @else
                <span class="rounded px-3 py-2 hover:bg-purple-700 text-white no-underline cursor-not-allowed">&raquo;</span>
            @endif
        </div>
        </div>
@endif

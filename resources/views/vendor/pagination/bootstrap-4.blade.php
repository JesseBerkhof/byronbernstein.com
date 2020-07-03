@if ($paginator->hasPages())
    <div class="flex items-center gray-600 mt-6">
        <div class="mx-auto">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="rounded-l rounded-sm border border-gray-900 px-3 py-2 cursor-not-allowed no-underline bg-gray-800 text-gray-600">&laquo;</span>
            @else
                <a
                        class="rounded-l rounded-sm border-t border-b border-l border-gray-900 px-3 py-2 text-gray-400 hover:bg-gray-700 no-underline bg-gray-800"
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
                    <span class="border-t border-b border-l border-gray-900 px-3 py-2 cursor-not-allowed no-underline bg-gray-800 text-gray-600">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="border-t border-b border-l border-gray-900 px-3 py-2 bg-gray-700 no-underline bg-gray-800 text-gray-600">{{ $page }}</span>
                        @else
                            <a class="border-t border-b border-l border-gray-900 px-3 py-2 hover:bg-gray-700 text-gray-400 no-underline bg-gray-800" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="rounded-r rounded-sm border border-gray-900 px-3 py-2 hover:bg-gray-700 text-gray-400 no-underline bg-gray-800" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
            @else
                <span class="rounded-r rounded-sm border border-gray-900 px-3 py-2 hover:bg-gray-700 text-gray-400 no-underline cursor-not-allowed">&raquo;</span>
            @endif
        </div>
        </div>
@endif

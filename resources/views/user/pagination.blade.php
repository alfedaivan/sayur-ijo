<nav aria-label="col-md-12 Page navigation example">
    <ul class="pagination">
        @if ($paginator->hasPages())
        @foreach ($elements as $element)

        {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled">
                    <span>{{ $element }}</span>
                </li>
            @endif

        {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link" href="#">
                                {{ $page }}
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{$page}}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
</nav>

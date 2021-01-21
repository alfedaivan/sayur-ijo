
    <nav aria-label="col-md-12 Page navigation example">
        @if ($paginator->hasPages())
        <ul class="pagination">

            {{-- Previous Page Link --}}

            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{$paginator->previousPageUrl()}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @endif


            @if($paginator->currentPage() > 3)
                <li class="page-item hidden-xs">
                    <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
                </li>
            @endif
            @if($paginator->currentPage() > 4)
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span aria-hidden="true">...</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}

            @foreach(range(1, $paginator->lastPage()) as $i)
                @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                    @if ($i == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link" href="#">
                                {{ $i }}
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                        </li>
                    @endif
                @endif
            @endforeach

            @if($paginator->currentPage() < $paginator->lastPage() - 3)
                <li class="page-item">
                    <a class="page-link" href="#">
                        <span aria-hidden="true">...</span>
                    </a>
                </li>
            @endif
            @if($paginator->currentPage() < $paginator->lastPage() - 2)
                <li  class="page-item hidden-xs">
                    <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
                </li>
            @endif


            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                     <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @endif
        </ul>
        @endif
    </nav>

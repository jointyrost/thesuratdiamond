<div class="post-pagination row pt-3">
    <div class="col-lg-12 text-center mt--20 mt_sm--0">
        <nav class="navigation pagination" aria-label="Page navigation example">
            <!-- Custom pagination in your Blade file -->
            @if ($items->hasPages())
            <ul class="pagination page-numbers pagination-lg">
                {{-- Previous Page Link --}}
                @if ($items->onFirstPage())
                    <li class="page-item page-numbers disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item page-numbers">
                        <a class="page-link" href="{{ $items->previousPageUrl() }}" rel="prev">Previous</a>
                    </li>
                @endif
            
                {{-- Pagination Elements --}}
                @foreach ($items->links()->elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled page-numbers">
                            <span class="page-link">{{ $element }}</span>
                        </li>
                    @endif
            
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $items->currentPage())
                                <li class="page-item active page-numbers">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item page-numbers">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            
                {{-- Next Page Link --}}
                @if ($items->hasMorePages())
                    <li class="page-item">
                        <a class="page-link page-numbers" href="{{ $items->nextPageUrl() }}" rel="next">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link next page-numbers">Next<i class="fal fa-arrow-right"></i></span>
                    </li>
                @endif
            </ul>
            @endif

          </nav>
        {{-- <a href="#" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a> --}}
    </div>
</div>
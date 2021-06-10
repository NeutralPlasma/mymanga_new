@if ($paginator->getNumPages() > 1)
    <nav aria-label="Pagination">
    <ul class="pagination justify-content-center">

        @if ($paginator->getPrevUrl())
            <li class="page-item">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
        @endif


        @foreach ($paginator->getPages() as $page)
            @if ($page['url'])
                <li class="page-item {{ $page['isCurrent'] ? 'active' : '' }}" >
                    <a class="page-link" href="{{ $page['isCurrent'] ? '#' : $page['url'] }}">{{$page['num']}}</a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link">{{$page['num']}}</span></li>
            @endif
        @endforeach


        @if ($paginator->getNextUrl())
                <li class="page-item"><a class="page-link"  href="{{$paginator->getNextUrl()}}">Next &raquo;</a></li>
        @endif
    </ul>
    </nav>
@endif


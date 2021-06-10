@if($paginator->getNumPages() > 1)
    <ul class="pagination pagination-lg justify-content-center">
        @if ($paginator->getPrevUrl())
            <span class="input-group-btn">
                <a href="<?php echo $paginator->getPrevUrl(); ?>" class="btn btn-primary" type="button">&laquo; Prev</a>
            </span>
        @else
            <span class="input-group-btn">
                <a href="<?php echo $paginator->getPrevUrl(); ?>" class="btn btn-disabled" type="button">&laquo; Prev</a>
            </span>
        @endif

            <select class="form-control paginator-select-page ml-3 mr-3" style="width: auto; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; appearance: none;">
            @foreach($paginator->getPages() as $page)
                @if($page['url'])
                        <option value="{{ $page['url'] }}" {{ $page['isCurrent'] ? "selected" : "" }}>
                            Page {{ $page['num'] }}
                        </option>
                @else
                        <option disabled>{{ $page['num'] }}</option>
                @endif
            @endforeach
            </select>

        @if($paginator->getNextUrl())
            <span class="input-group-btn">
                <a href="{{$paginator->getNextUrl()}}" class="btn btn-primary" type="button">Next &raquo;</a>
            </span>
        @else
                <span class="input-group-btn">
                <a href="{{$paginator->getNextUrl()}}" class="btn btn-disabled" type="button">Next &raquo;</a>
            </span>
        @endif
    </ul>
@endif



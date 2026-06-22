@props(['records'])
<div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3 mb-5 pb-4">
    <div class="mb-3 mb-md-0 d-flex align-items-center">
        <span class="text-muted me-2 small fw-semibold">Show:</span>
        <form method="GET" action="{{ url()->current() }}" id="paginationForm_{{ Str::random(5) }}" class="d-inline-block">
            @foreach(request()->except('per_page', 'page') as $key => $value)
                @if(is_array($value))
                    @foreach($value as $k => $v)
                        <input type="hidden" name="{{ $key }}[{{ $k }}]" value="{{ $v }}">
                    @endforeach
                @else
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endif
            @endforeach
            <select name="per_page" class="form-select form-select-sm shadow-none" style="border-radius: 6px; width: auto; font-weight: 500;" onchange="this.form.submit();">
                <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                <option value="all" {{ request('per_page') == 'all' ? 'selected' : '' }}>All</option>
            </select>
        </form>
        <span class="text-muted ms-3 small">
            @if(request('per_page') == 'all')
                Showing all <span class="fw-bold">{{ $records->count() }}</span> entries
            @else
                Showing <span class="fw-bold">{{ $records->firstItem() ?? 0 }}</span> to <span class="fw-bold">{{ $records->lastItem() ?? 0 }}</span> of <span class="fw-bold">{{ $records->total() }}</span> entries
            @endif
        </span>
    </div>
    
    <div>
        @if(request('per_page') != 'all')
            {{ $records->appends(request()->except('page'))->links() }}
        @endif
    </div>
</div>

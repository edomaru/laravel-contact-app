<form action="{{ $action }}" method="POST" style="display: inline">
    @csrf
    @method('delete')
    @if (isset($buttonStyle) && $buttonStyle === 'default')
        <button type="submit" class="btn btn-outline-danger" title="Delete">Delete</button>
    @else
        <button type="submit" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></button>
    @endif
</form>
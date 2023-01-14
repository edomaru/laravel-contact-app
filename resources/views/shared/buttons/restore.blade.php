<form action="{{ $action }}" method="POST" style="display: inline">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-sm btn-circle btn-outline-info" title="Restore"><i class="fa fa-undo"></i></button>
</form>
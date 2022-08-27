<form method="GET">
    <select class="custom-select" name="company_id" onchange="this.form.submit()">
        <option value="" selected>All Companies</option>
        @foreach ($companies as $id => $name)
            <option value="{{ $id }}" @if($id == request()->query("company_id")) selected @endif>{{ $name }}</option>
        @endforeach
    </select>
</form>
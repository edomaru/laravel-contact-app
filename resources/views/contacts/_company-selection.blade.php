<select class="custom-select">
    <option value="" selected>All Companies</option>
    @foreach ($companies as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
    @endforeach
</select>
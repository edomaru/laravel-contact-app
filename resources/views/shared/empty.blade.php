<tr>
    <td colspan="{{ $numCol }}">
        <div class="alert alert-danger">
            @isset($emptyMessage)
                {{ $emptyMessage }}
            @else
                No record found
            @endisset
        </div>
    </td>
</tr>
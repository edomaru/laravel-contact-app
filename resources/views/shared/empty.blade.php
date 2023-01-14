<tr>
    <td colspan="{{ $numCol }}">
        <div class="alert alert-danger">
            @isset($message)
                {{ $message }}
            @else
                No record found
            @endisset
        </div>
    </td>
</tr>
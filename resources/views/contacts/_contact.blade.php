<tr>
    <th scope="row">{{ $contacts->firstItem() + $index }}</th>
    <td>{{ $contact->first_name }}</td>
    <td>{{ $contact->last_name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ $contact->company->name }}</td>
    <td width="150">
      @if ($showTrashButtons)
        @include('shared.buttons.restore', [
          'action' => route('contacts.restore', $contact->id)
        ])
        @include('shared.buttons.force-delete', [
          'action' => route('contacts.force-delete', $contact->id)
        ])
      @else
        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
        @include('shared.buttons.destroy', [
          'action' => route('contacts.destroy', $contact->id)
        ])
      @endif
    </td>
</tr>
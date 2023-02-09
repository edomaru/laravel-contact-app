<tr>
  <th scope="row">{{ $companies->firstItem() + $index }}</th>
  <td>{{ $company->name }}</td>
  <td>{{ $company->website }}</td>
  <td>{{ $company->email }}</td>
  <td><a href="{{ route('contacts.index', ['company_id' => $company->id]) }}">{{ $company->contacts_count }}</a></td>
  <td width="150">
    @if ($showTrashButtons)
      @include('shared.buttons.restore', [
        'action' => route('companies.restore', $company->id)
      ])
      @include('shared.buttons.force-delete', [
        'action' => route('companies.force-delete', $company->id)
      ])   
    @else
      <a href="{{ route('companies.show', $company->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
      <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
      @include('shared.buttons.destroy', [
          'action' => route('companies.destroy', $company->id)
      ])
    @endif
  </td>
</tr>
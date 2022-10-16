<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Company;
use App\Models\Contact;

class ContactController extends Controller
{
    protected function userCompanies()
    {
        return Company::forUser(auth()->user())->orderBy('name')->pluck('name', 'id');
    }

    public function index()
    {
        $companies = $this->userCompanies();

        $contacts = Contact::allowedTrash()
            ->allowedSorts(['first_name', 'last_name', 'email'], "-id")
            ->allowedFilters('company_id')
            ->allowedSearch('first_name', 'last_name', 'email')
            ->forUser(auth()->user())
            ->with('company')
            ->paginate(10);

        return view('contacts.index', compact('contacts', 'companies'));
    }

    public function create()
    {
        $companies = $this->userCompanies();
        $contact = new Contact();

        return view('contacts.create', compact('companies', 'contact'));
    }

    public function store(ContactRequest $request)
    {
        $request->user()->contacts()->create($request->validated());

        return redirect()->route('contacts.index')->with('message', 'Contact has been added successfully');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show')->with('contact', $contact);
    }

    public function edit(Contact $contact)
    {
        $companies = $this->userCompanies();

        return view('contacts.edit', compact('companies', 'contact'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());

        return redirect()->route('contacts.index')->with('message', 'Contact has been updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        $redirect = request()->query('redirect');
        return ($redirect ? redirect()->route($redirect) : back())
            ->with('message', 'Contact has been moved to trash.')
            ->with('undoRoute', getUndoRoute('contacts.restore', $contact));
    }

    public function restore(Contact $contact)
    {
        $contact->restore();
        return back()
            ->with('message', 'Contact has been restored from trash.')
            ->with('undoRoute', getUndoRoute('contacts.destroy', $contact));
    }

    public function forceDelete(Contact $contact)
    {
        $contact->forceDelete();
        return back()
            ->with('message', 'Contact has been removed permanently.');
    }
}

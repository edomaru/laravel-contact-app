@extends('layouts.main')

@section('title', 'Contact App | Dashboard')

@section('content')
<main class="py-5">
    <div class="container">
        <h1 class="h5 mb-3">
            Welcome
            <small class="text-muted">{{ $user->name }}</small>
        </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        Contacts & Companies
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <h3 class="h1">{{ $user->contacts_count }}</h3>
                            <ul class="list-unstyled pl-5">
                                <li>{{ $user->companies_count }} {{ str('companies')->plural($user->companies_count) }} </li>
                                <li>{{ $user->contacts_count }} {{ str('contacts')->plural($user->contacts_count) }} </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        Recent Contacts
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <h3 class="h1">50</h3>
                            <ul class="list-unstyled pl-5">
                                <li>40 Unassigned</li>
                                <li>10 Assigned</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        To-dos
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <h3 class="h1">10</h3>
                            <ul class="list-unstyled pl-5">
                                <li>7 Overdue</li>
                                <li>3 Today</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-white">
                        Contacts
                    </div>
                    <div class="card-body p-0">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>123456789</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jane</td>
                                    <td>Roe</td>
                                    <td>2345678901</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jack</td>
                                    <td>Sparrow</td>
                                    <td>3456789012</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        To-dos
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="todo-item-1">
                                <label class="form-check-label" for="todo-item-1">
                                    To do 1
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="todo-item-2">
                                <label class="form-check-label" for="todo-item-2">
                                    To do 2
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="todo-item-3" checked>
                                <label class="form-check-label text-muted" for="todo-item-3">
                                    <strike>To do 3</strike>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
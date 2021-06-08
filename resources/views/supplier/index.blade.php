@extends('layout.main')
@section('title', 'Supplier')

@section('content')
    <div style="margin-top: -1%;" class="row d ">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row">
                    <h3>Suppliers</h3>
                    <hr>
                    <div class="col-10"></div>
                    <div class="col-2 text-end">
                        <a href="{{ URL::route('supplier.create') }}" class="btn btn-dark pull-right">Create</a>
                    </div>
                    <div class="col-10">
                        <br>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-4 text-end">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact Person</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $supplier)
                                    <tr>
                                        <th scope="row">{{ $supplier->name }}</th>
                                        <td>{{ $supplier->contact }}</td>
                                        <td>{{ $supplier->address }}</td>
                                        <td>{{ $supplier->contact_person }}</td>
                                        <td>{{ $supplier->category }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item"
                                                            href="{{ URL::route('supplier.update', $supplier->id) }}">Update</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection

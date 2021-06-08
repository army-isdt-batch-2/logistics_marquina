@extends('layout.main')
@section('title', 'Supplier')

@section('content')
    <div style="margin-top: -1%;" class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row">
                    <h3>Update Supplier</h3>
                    <hr>
                    <div class="col-10"></div>
                    <div class="col-12">
                        <br>
                    </div>
                    <div class="col-12">
                        <form action="{{ URL::route('supplier.update.save', $data->id) }}" method="post" class="row g-3">
                            @csrf
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputEmail4" name="name"
                                    value="{{ $data->name }}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Contact</label>
                                <input type="tel" class="form-control" id="inputPassword4" name="contact"
                                    value="{{ $data->contact }}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputPassword4" name="address"
                                    value="{{ $data->address }}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" id="inputPassword4" name="contact_person"
                                    value="{{ $data->contact_person }}" required>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Category</label>
                                <input type="text" class="form-control" id="inputAddress" name="category"
                                    value="{{ $data->category }}" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

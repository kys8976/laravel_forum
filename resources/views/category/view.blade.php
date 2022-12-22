@extends('layouts.forum')

@section('content')
    <div class="conntent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <input type="text" class="form-control" value="Movie">
                </div>
                <div class="col-12 my-3">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                        <button class="btn btn-secondary me-md-2" type="button">Update</button>
                        <button class="btn btn-danger" type="button">Delete</button>
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('layouts.forum')

@section('content')
    <div class="conntent">
        <div class="container">
            <div class="row">
                <div class="col-12 border border-1 mt-5">
                    <h3>title data </h3>
                    <p>dsadasada das  das asd ascas ddsa dsadasada das  das asd ascas ddsa dsadasada das  das asd ascas ddsa dsadasada das  das asd ascas ddsa dsadasada das  das asd ascas ddsa dsadasada das  das asd ascas ddsa dsadasada das  das asd ascas ddsa dsadasada das  das asd ascas ddsa dsadasada das  das asd ascas ddsa 
                    </p>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                        <button class="btn btn-secondary me-md-2" type="button">Edit</button>
                        <button class="btn btn-danger" type="button">Delete</button>
                      </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <div class="d-grid gap-2 col-2 mx-auto">
                            <button class="btn btn-outline-danger fs-4"><i class=" fa-solid fa-heart"></i> 3</button>
                      </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">A second item</li>
                        <li class="list-group-item list-group-item-action">A third item</li>
                        <li class="list-group-item list-group-item-action">A fourth item</li>
                        <li class="list-group-item list-group-item-action">And a fifth one</li>
                      </ul>
                </div>
            </div>
            <hr>
            <div class="row my-3">
                <div class="col-12">
                    <input type="text" class="form-control">                    
                </div>
                <div class="col-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end my-3">
                        <button class="btn btn-primary" type="button">Submit</button>
                      </div>
                </div>
            </div>

        </div>
    </div>

@endsection
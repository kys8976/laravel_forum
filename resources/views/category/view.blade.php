@extends('layouts.forum')

@section('content')
    <div class="conntent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="/category/{{ $category->id }}/update">
                    <input type="text" name="title" class="form-control" value="{{ $category->title }}">
                </div>
                <div class="col-12 my-3">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">                    
                            @method('PUT')
                            @csrf
                            <button class="btn btn-outline-secondary me-md-2" type="submit">Update</button>
                        </form>
                        <form method="post" action="/category/{{ $category->id }}/delete">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection
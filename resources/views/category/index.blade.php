@extends('layouts.forum')

@section('content')
    <div class="conntent">
        <div class="container">
            <div class="row my-3">
                <div class="col-12">
                    <label>Category Title</label>
                    <form method="POST" action="/category/store">
                        @csrf
                        <input type="text" name="title" class="form-control">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3 my-3">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>                    
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-group">                        
                        @foreach ($categories as $category)
                        <li class="list-group-item" >
                            <a href="{{ url('/') }}/category/{{$category->id}}/view">
                                {{$category->title }} 
                            </a>
                        </li>                            
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
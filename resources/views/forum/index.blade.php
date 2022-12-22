@extends('layouts.forum')

@section('content')
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ url('/') }}/create" class="btn btn-success">New Post</a>
          </div>
        </div>
        <hr class="mt-3">

        @php
            $categories =App\Models\Category::orderby('title', 'asc')
            ->get();
        @endphp
        @if(count($categories)>0)
        @foreach($categories as $category)
        @php
            $posts = App\Models\Post::where('category_id', $category->id)
            ->orderby('created_at','desc')->limit(3)
            ->get();
        @endphp
        @if(count($posts)>0)
        <div class="row">
            <div class="col-12">
                <h4>{{ $category->title }}</h4>
                <ul class="list-group">
                    @foreach($posts as $post)
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ url('/') }}/{{ $post->id }}/view" style="text-decoration: none" class="text-dark">
                        {{$post->title }}
                        </a>
                        <span class="badge bg-info text-dark"><i class=" fa-solid fa-comment-dots"></i> 4</span>
                        <span class="badge rounded-pill bg-danger"><i class=" fa-solid fa-heart"></i> 3</span>
                        <br>
                        <small>{{ $post->created_at }} | by SB Hero</small>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="{{ url('/') }}/{{ $category->id }}/category" class="btn btn-dark">All Postings of {{ $category->title }} Category</a>
                </div>
            </div>
        </div>
        <hr>
        @endif
        @endforeach
        @endif
      </div>      
@endsection
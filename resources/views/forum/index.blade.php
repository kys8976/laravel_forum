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
        <div class="row">
            <div class="col-12">
                <h4>Music</h4>
            </div>
</div>            
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ url('/') }}/1/view">
                        Three Days of the Condor
                        </a>
                        <span class="badge bg-info text-dark"><i class=" fa-solid fa-comment-dots"></i> 4</span>
                        <span class="badge rounded-pill bg-danger"><i class=" fa-solid fa-heart"></i> 3</span>
                        <br>
                        <small>2022-1-22 | by SB Hero</small>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge bg-info text-dark"><i class=" fa-solid fa-comment-dots"></i> 4</span>
                        <span class="badge rounded-pill bg-danger"><i class=" fa-solid fa-heart"></i> 3</span>
                        <br>
                        <small>2022-1-22 | by SB Hero</small>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge bg-info text-dark"><i class=" fa-solid fa-comment-dots"></i> 4</span>
                        <span class="badge rounded-pill bg-danger"><i class=" fa-solid fa-heart"></i> 3</span>
                        <br>
                        <small>2022-1-22 | by SB Hero</small>
                    </li>
                </ul>
            </div>
            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button tyle="button" class="btn btn-dark">All Postings of Music Category</button>
                </div>
            </div>
        </div>
      </div>      
@endsection
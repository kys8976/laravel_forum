@extends('layouts.forum')

@section('insde_hed_tag')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="conntent">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" value="{{ $post->title }}">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <select class="form-select" aria-label="Default select example" id="category_id">
                        <!--
                        <option selected>Open this select menu</option>
                        -->
                        @foreach ($categories as $category)
                            <option value="{{$category->id }}" {{$post->category_id == $category->id ?
                             "selected" : ""}}>{{$category->title }} </option>
                        @endforeach                        
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <div id="editor">{!!$post->content !!}</div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-success" type="submit" id="submit">Update</button>
                      </div>                    
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="post_id" value="{{ $post->id }}">

@endsection

@section('before_body_end_tag')
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $( document ).ready(function() {
            $('#submit').click(function(){

                var title = $('#title').val();
                var category_id = $('#category_id').val();
                var content = $('.ck-content').html();
                var post_id = $('#post_id').val();
        
                $.ajax({
                    type : "POST",
                    url: "/update", 
                    data: { 
                        _token: CSRF_TOKEN,
                        title: title,
                        category_id: category_id,
                        content:content,
                        post_id,post_id
                    }, 
                    dataType: 'JSON',
                    success: function success(data){
                        console.log(data.result);
                        window.location.href= '/'+post_id+'/view' ;
                    },
                    error: function (response) {
                        console.log(response) ;
                    }
                });
            });
        });
    </script>
@endsection

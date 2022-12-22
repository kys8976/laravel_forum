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
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="movie">Movie</option>
                        <option value="music">Music</option>
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <div id="editor"></div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-success" type="button">Submit</button>
                      </div>                    
                </div>
            </div>
        </div>
    </div>

@endsection

@section('before_body_end_tag')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" method="post" enctype="multipart/form-data">
    @csrf
       <div class="row">
           <div class="col-8 offset-2">
               <h3>Add New Post</h3>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>

                        <input name="caption" id="caption" type="text" class="form-control">

                        @error('caption')
                            <span class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row ">
                    <label for="image" class="col-md-4 col-form-label pr-5">Post Image</label>

                    <input type="file" name="image" id="image" class="form-control-file">

                    @error('image')
                        <span class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                    
                </div>

                <div class="row">
                    <button class="btn btn-primary mt-3">Add new post</button>
                </div>

           </div>
       </div>
   </form>
</div>
@endsection

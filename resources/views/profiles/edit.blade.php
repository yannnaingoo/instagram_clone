@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
       <div class="row">
           <div class="col-8 offset-2">
               <h3>Edit Profile</h3>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label ">Title</label>

                        <input name="title" id="title" type="text" class="form-control"
                        @error('name') is-invalid @enderror
                       
                        value="{{ old('name') ?? $user->profile->title }}"
                        required autocomplete="name" autofocus>

                        @error('title')
                            <span class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label ">Description</label>

                        <input name="description" id="description" type="text" class="form-control"
                        @error('name') is-invalid @enderror
                        value="{{ old('name') ?? $user->profile->description}}"
                        required autocomplete="name" autofocus>

                        @error('description')
                            <span class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label ">URL</label>

                        <input name="url" id="url" type="text" class="form-control"
                        @error('name') is-invalid @enderror
                        value="{{ old('name') ?? $user->profile->url }}"
                        required autocomplete="name" autofocus>

                        @error('url')
                            <span class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row ">
                    <label for="image" class="col-md-4 col-form-label pr-5">Post Image</label>

                    <input type="file" name="image" id="image" class="form-control-file" value="{{ old('image') ?? $user->profile->image }}">

                    @error('image')
                        <span class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                    
                </div>

                <div class="row">
                    <button class="btn btn-primary mt-3">Save Profile</button>
                </div>

           </div>
       </div>
   </form>
</div>
@endsection

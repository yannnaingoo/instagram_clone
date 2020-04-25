@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 pt-3 ">
            <div class="pl-5">
                <img src="{{$user->profile->imageProfile()}}"  class="rounded-circle w-100" style="max-width:150px">
            </div>
            
        </div>
        <div class="col-md-9 pt-3">
            <div class="d-flex justify-content-between align-text-bottom">
                <div class="d-flex pb-3">
                    <h3 class="pr-5">{{$user->username}}</h3>
                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{$postCount}} </strong>posts</div>
                <div class="pr-5"><strong>{{$followersCount}} </strong>followers</div>
                <div class="pr-5"><strong>{{$followingCount}} </strong>following</div>
            </div>
            <div class="pt-4">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? 'N/A'}} </a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-md-4 pt-4">
                {{-- <div>{{$post->caption}}</div> --}}
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" width="100%">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection

  

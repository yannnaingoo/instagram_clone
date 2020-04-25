@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-md-4">
            <div class="d-flex">
                <div class="pr-3 align-item-center">
                    <img src="{{$post->user->profile->imageProfile()}}" alt="" class="w-100 rounded-circle" style="max-width:30px;">
                </div>
                <div>
                    <h5>
                        <a href="/profile/{{$post->user->id}}" class="text-dark font-weight-bold">
                            {{$post->user->username}}
                        </a>
                    </h5>
                </div>
                <div class="pl-3"> |</div>
                <div class="pl-3" style="align-item:center;">
                   <h5><a href="">Follow</a></h5>
                </div>
            </div>
            <hr>
            <p>
                <span>
                    <a href="/profile/{{$post->user->id}}" class="text-dark font-weight-bold">
                        {{$post->user->username}}
                    </a>
                </span> 
                {{$post->caption}}
            </p>
        </div>
    </div>
</div>
@endsection

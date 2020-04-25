@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)

    <div class="row ">
        <div class="col-md-6 offset-3">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </a>
        </div>
    </div>
    <div class="row pt-3 pb-5">
        <div class="col-md-6 offset-3">
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
                {{-- <div class="pl-3"> |</div>
                <div class="pl-3" style="align-item:center;">
                   <h5><a href="">Follow</a></h5>
                </div> --}}
            </div>
            <p>
                <span>
                    <a href="/profile/{{$post->user->id}}" class="text-dark font-weight-bold">
                        {{$post->user->username}}
                    </a>
                </span> 
                {{$post->caption}}
            </p>
            <hr>

        </div>
    </div>
        
    @endforeach

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">{{$posts->links()}}</div>
    </div>
</div>
@endsection

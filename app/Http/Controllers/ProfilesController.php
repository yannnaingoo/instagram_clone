<?php

namespace App\Http\Controllers;

use auth;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }
    
    
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        $postCount = $user->posts->count();
        $followersCount = $user->profile->followers->count();
        $followingCount= $user->following->count();
        //$user=User::findOrFail($user);
        return view('profiles.index',compact('user','follows','postCount','followersCount','followingCount'));
    }

    public function edit(User $user){
        $this->authorize('update',$user->profile);
        return view('profiles.edit',\compact('user'));
    }

    public function update(User $user){
        $data=request()->validate([
            'title'=>'required',
            'description'=>'required|max:255',
            'url'=>'url',
            'image'=>'',
        ]);

        if(request('image')){
            $imagePath=request('image')->store('profile','public');
            $image=Image::make(public_path("/storage/{$imagePath}"))->fit(1000,1000);
            $imageArray = ['image'=>$imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function imageProfile(){

        $imagePath = ($this->image) ? $this->image : 'profile/wcHArKB36xks7A2wM41ygOtRj8brbV35ZkDEC9QA.webp';

        return '/storage/'.  $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    //
    use  SoftDeletes;
    protected $fillable=['id','name','label'];
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}

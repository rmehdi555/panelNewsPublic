<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryTicket extends Model
{
    //
    use  SoftDeletes;
    protected $fillable=['id','name','label'];
}

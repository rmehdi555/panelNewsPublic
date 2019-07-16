<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    //
    use SoftDeletes;
    protected $fillable=['id','ticket_id','url'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    //
    use SoftDeletes;
    protected $fillable=['id','link','destlink','forxpath','ftitlexpath','fdatexpath','fabsxpath','fcontxpath','fimgxpath','titlexpath','absxpath','datexpath','contxpath','tgxpath','imgxpath'];
}

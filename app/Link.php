<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    //
    use SoftDeletes;
    protected $table = 'link';
    protected $fillable = ['id','title','destlink','link','active','forxpath','ftitlexpath','fdatexpath','fabsxpath','fcontxpath','fimgxpath','fimgpath','titlexpath'
        ,'absxpath','datexpath','contxpath','tgxpath','imgxpath','andkeywords','orkeywords','notkeywords'];
}

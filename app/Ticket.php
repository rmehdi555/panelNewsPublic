<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    //
    use SoftDeletes;
    protected $fillable=['id','name','family','username','mobile','level_id','category_id','status_id'];

    public function hasCategoryTicket($id){
        return CategoryTicket::find($id);
    }
    public function hasLevelTicket($id){
        return LevelTicket::find($id);
    }
    public function hasStatusTicket($id){
        return StatusTicket::find($id);
    }

    public function body(){
        return $this->hasMany('App\BodyTicket');
    }
    public function file(){
        return $this->hasMany('App\File');
    }

}

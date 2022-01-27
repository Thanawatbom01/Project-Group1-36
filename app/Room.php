<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'id_room';
    
    public function admin(){
        return $this->hasOne(User::class,'id','id_user');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $primaryKey = 'id_body';

    public function admin(){
        return $this->hasOne(User::class,'id','id_user');
    }
}

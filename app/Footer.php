<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $primaryKey = 'id_footer';

    public function admin(){
        return $this->hasOne(User::class,'id','id_user');
    }
}

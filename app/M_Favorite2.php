<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class M_Favorite2 extends Model {
    protected $table = 'favorite';
    protected $connection = 'mysql2';
    public function detailUser()
    {
        return $this->hasOne(M_User::class,'id_user','id_user');
    }
}

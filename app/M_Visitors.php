<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Visitors extends Model {
    protected $table = 'visitors';
    
}

class M_Visitors2 extends Model {
    protected $table = 'visitors';
    protected $connection = 'mysql2';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_User extends Model {
    protected $table = 'user';

    
}
class M_User2 extends Model {
    protected $table = 'user';
    protected $connection = 'mysql2';

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Eloquent
{
    protected $connection = 'mongodb_conn';
    protected $collection = 'usuarios'; 
    protected $primaryKey = 'id'; 
}

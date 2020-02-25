<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuariosModel extends Model
{
    protected $connection ='mysql';
    public $table = 'usuarios';
    public $primaryKey = 'id';
    public $incrementing=true;
    public $timestamps=true;
}

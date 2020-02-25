<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlimentosModel extends Model
{
    protected $connection ='mysql';
    public $table = 'alimentos';
    public $primaryKey = 'id';
    public $incrementing=true;
    public $timestamps=true;
}


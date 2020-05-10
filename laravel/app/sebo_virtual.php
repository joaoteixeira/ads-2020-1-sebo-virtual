<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sebo_virtual extends Model
{
    protected $primaryKey='id_pessoa';
    protected $table='pessoas';
    public $timestamps=false;
}

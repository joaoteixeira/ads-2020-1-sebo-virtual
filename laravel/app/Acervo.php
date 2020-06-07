<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acervo extends Model
{
    protected $primaryKey='idacervo';
    protected $table = 'acervos';
    protected $fillable=['nome','qtdlivros'];
    public $timestamps=false; 
}

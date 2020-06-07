<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leitor extends Model
{
    protected $primaryKey='idleitor';
    protected $table = 'leitores';
    protected $fillable=['nome','telefone','email'];
    public $timestamps=false; 
}

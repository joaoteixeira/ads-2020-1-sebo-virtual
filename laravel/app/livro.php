<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $primaryKey='id';
    protected $table = 'livros';
    protected $fillable=['nome','autor'];
    public $timestamps=false; 
}

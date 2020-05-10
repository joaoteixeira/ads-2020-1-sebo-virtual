<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    protected $primaryKey='id_livro';
    protected $table='livros';
    public $timestamps=false;
}

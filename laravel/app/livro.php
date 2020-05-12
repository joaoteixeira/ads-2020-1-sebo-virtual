<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    protected $primaryKey='idlivro';
    protected $table='livros';
    public $timestamps=false;
}

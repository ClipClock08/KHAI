<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizing extends Model
{
    //
    protected $table = 'organizing';
    protected $fillable = ['degree','fio','info'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    //
    protected $table = 'intro';
    protected $fillable = ['head','event','place','text'];
}

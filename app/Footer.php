<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    //
    protected $table = 'footer';
    protected $fillable  = ['copy_write', 'event_head', 'event_title', 'footer'];
}

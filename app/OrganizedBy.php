<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizedBy extends Model
{
    //
    protected $table = 'organized_by';
    protected $fillable = ['title', 'address', 'image', 'google_map'];
}

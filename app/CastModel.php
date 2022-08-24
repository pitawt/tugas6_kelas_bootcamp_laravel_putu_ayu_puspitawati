<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CastModel extends Model
{
    protected $table = 'cast';
    protected $fillable = ['nama','umur','bio'];
}

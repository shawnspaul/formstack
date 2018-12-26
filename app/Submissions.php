<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    protected $fillable = [
        'name',
        'email',
        'prog_lang',
        'tv_show'
    ];
}

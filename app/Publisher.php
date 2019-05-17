<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    //
    protected $table = 'content_owner';

    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
}

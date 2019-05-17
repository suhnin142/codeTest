<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'tbl_book';

    protected $fillable = [
        'book_uniq_idx',
        'bookname',
        'cover_photo',
        'prize'
    ];
    public $timestamps = false;
}


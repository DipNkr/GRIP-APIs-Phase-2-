<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book_details';
    protected $fillable = ['Bname','Bauthor','Bprice','Bstatus'];
}

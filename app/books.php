<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    //
    Protected $fillable = ['bookName', 'bookDescription','bookPrice'];
}

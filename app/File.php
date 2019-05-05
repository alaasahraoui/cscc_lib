<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //we can use 2 fct $garded or $fillable
    protected $fillable=['nom','image'];
//  protected $garded['status']
}

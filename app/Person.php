<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
   protected  $fillable = ['f_name', 'l_name', 'email','phone'];
}

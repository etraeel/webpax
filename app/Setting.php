<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   protected $fillable = ['name' , 'value'];


   public $timestamps = false;
}

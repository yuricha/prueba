<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
   protected $table = 'dogs';
   protected $fillable =[
       'name',
       'age'
   ]; 
   protected $hidden = [
    'created_at', 'updated_at'
];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
  protected $fillable = array('lastname', 'firstname','slug','dob','childid','servicestartdate','serviceenddate','servicecoordinatorname','parentcaregivername','address','zipcode','phone','frequency','document');
    //
}

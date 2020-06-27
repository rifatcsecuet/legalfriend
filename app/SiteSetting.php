<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $guarded = [ ];

    /*
    Rather declaring the fillable fields, I get away with protected $guarded = []; which means no field is protected
    If you want to block all fields from being mass-assign you can just do this: protected $guarded = [‘*’];
    */
}

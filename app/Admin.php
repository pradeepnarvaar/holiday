<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='tbl_webusers'; 

       protected $fillable = [ 'name', 'email','password','phone','role'
    ];

    protected $hidden = ['userId'];
}

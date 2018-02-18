<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $primaryKey = 'id';
   
    protected $fillable = 
    [
    'firstname' , 'lastname' ,'title','mobile', 'email', 'companyname', 'country',
    'companysize','companyphone','companywebsite','heardaboutus'
    ];

}

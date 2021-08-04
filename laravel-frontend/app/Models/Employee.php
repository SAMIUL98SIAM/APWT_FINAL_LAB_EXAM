<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee_table' ;
    protected $primaryKey = 'id' ;
    public $timestamps = false ;
}

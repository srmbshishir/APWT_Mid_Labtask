<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'user';
   // protected $primaryKey = 'name';
    public $timestamps = false;
    public $incrementing = false;
}

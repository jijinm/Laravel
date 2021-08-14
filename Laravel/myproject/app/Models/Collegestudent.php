<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collegestudent extends Model
{
    use HasFactory;
    protected $fillable = ['name','branch','totalmarks'];
}

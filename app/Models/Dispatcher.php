<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatcher extends Model
{
    protected $table = 'dispatcher';
    protected $fillable = ['id','office_id', 'dispatcher_name', 'dispatcher_dob'];
    public $timestamps = false;
}

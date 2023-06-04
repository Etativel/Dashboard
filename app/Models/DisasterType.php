<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterType extends Model
{
    protected $table = 'disastertype';
    protected $fillable = ['id','type_name'];
    public $timestamps = false;
}

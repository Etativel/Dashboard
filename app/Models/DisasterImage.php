<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterImage extends Model
{
    protected $table = 'disasterimage';
    protected $fillable = ['id','disaster_id','image','image_name','image_description'];
    public $timestamps = false;
}

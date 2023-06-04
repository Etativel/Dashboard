<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterLocation extends Model
{
    protected $table = 'disasterlocation';
    protected $fillable = ['id','disaster_id','longitude','latitude','location_name'];
    public $timestamps = false;
}

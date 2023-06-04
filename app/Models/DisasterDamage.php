<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterDamage extends Model
{
    protected $table = 'disasterdamage';
    protected $fillable = ['id','disaster_id','location_id','office_id','affected','injured','missing','killed','building_destroyed','building_damage'];
    public $timestamps = false;
}

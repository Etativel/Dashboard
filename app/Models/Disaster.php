<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    public $table = 'disasters';
    public $fillable = ['id','type_id','office_id','dispatcher_id','status_id','disaster_title','disaster_date','disaster_description', 'status', 'type'];
    public $timestamps = false;
    
}

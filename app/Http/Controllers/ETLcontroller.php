<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ETLcontroller extends Controller
{
    function list()
    {
        return DB::connection('mysql2')->table("fact_penanganan")->get();
    }
}

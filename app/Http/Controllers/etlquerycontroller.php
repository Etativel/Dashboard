<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class etlquerycontroller extends Controller
{
    public function etlsum()
    {
        // $totalbencana = count(DB::connection('mysql2')->table("fact_penanganan"));
        $total_bencana = DB::connection('mysql2')->table("fact_penanganan")->count();
        $total_ongoing = DB::connection('mysql2')->table("fact_penanganan")->where("status_name", "=", "Ongoing")->count();
        $total_terdampak = DB::connection('mysql2')->table("fact_penanganan")->sum("affected");
        $total_meninggal = DB::connection('mysql2')->table("fact_penanganan")->sum("killed");
        $total_terluka = DB::connection('mysql2')->table("fact_penanganan")->sum("injured");
        $total_hilang = DB::connection('mysql2')->table("fact_penanganan")->sum("missing");
        $total_bangunanrusak = DB::connection('mysql2')->table("fact_penanganan")->sum("building_damaged");
        $total_bangunanhancur = DB::connection('mysql2')->table("fact_penanganan")->sum("building_destroyed");
        $map_array = DB::connection('mysql2')->table("fact_penanganan")->get();
        return View ('testing', compact('total_bencana','total_ongoing','total_terdampak','total_meninggal','total_terluka','total_hilang','total_bangunanrusak','total_bangunanhancur','map_array'));
    }
}

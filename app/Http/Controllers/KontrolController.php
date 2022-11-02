<?php

namespace App\Http\Controllers;

use App\Models\Bambu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kontrol;
use Carbon\Carbon;
use Illuminate\Contracts\Support\ValidatedData;

class KontrolController extends Controller
{
    public function index(){

        $bambu = Bambu::all();
        $kontrol = Kontrol::with('bambu') //relasi tabel bambu
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();

        return view('dashboard.kontrol.index', [
            'title' => 'Inkubator | Kontrol',
            'kontrol' => $kontrol,
            'bambu' => $bambu,
        ]);
    }

    public function store(Request $request){

       Kontrol::insert([
        'nama' => $request->nama,
        'awal_berat' => $request->awal_berat,
        'nilai_berat' => $request->nilai_berat,
        'min_suhu' => $request->min_suhu,
        'nilai_suhu' => $request->nilai_suhu,
        'blower' => $request->blower,
        'bambu_id' => $request->bambu_id,
        'created_at' => Carbon::now(),
    ]);

       return redirect('/kontrol');

    }
    public function minsuhu()
    {

        $monitoring = DB::table('kontrols')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        foreach ($monitoring as $ko ){
        $suhu = $ko->min_suhu;
        }

        echo($suhu);
    }

    public function kontrolsuhu()
    {

        $monitoring = DB::table('kontrols')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        foreach ($monitoring as $ko ){
        $suhu = $ko->nilai_suhu;
        }

        echo($suhu);
    }

    public function awalberat()
    {
        $monitoring = DB::table('kontrols')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        foreach ($monitoring as $ko ){
        $berat = $ko->awal_berat;
        }

        echo($berat);
    }

    public function kontrolberat()
    {
        $monitoring = DB::table('kontrols')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        foreach ($monitoring as $ko ){
        $berat = $ko->nilai_berat;
        }

        echo($berat);
    }

    public function kontrolblower()
    {
        $monitoring = DB::table('kontrols')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        foreach ($monitoring as $ko ){
        $blower = $ko->blower;
        }

        echo($blower);
    }

}


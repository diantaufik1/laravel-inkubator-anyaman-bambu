<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Contracts\Queue\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MonitoringController extends Controller
{
    public function index(){
        $monitoring = DB::table('monitorings')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        return view('dashboard.monitoring.index', [
            'title' => 'Inkubator | Monitoring',
            'monitoring' => $monitoring,

        ]);
    }

    public function readsuhu(){

        $monitoring = DB::table('monitorings')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        foreach($monitoring as $ko) {
            $suhu = $ko->suhu;
        }
        echo($suhu);
    }

    public function readkelembapan(){

        $monitoring = DB::table('monitorings')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        foreach($monitoring as $ko) {
            $kelembapan = $ko->kelembapan;
        }
        echo($kelembapan);
    }

    public function load(){ //untuk menampilkan data monitoring grafik ke high 
        $berat = Monitoring::select(DB::raw("CAST(SUM(berat) as double) as berat"))
        ->GroupBy(DB::raw("(created_at)"))
        ->pluck('berat');
        $bulan = Monitoring::select(DB::raw("TIMESTAMP(created_at) as bulan"))
        ->GroupBy(DB::raw("TIMESTAMP(created_at)"))
        ->pluck('bulan'); //tanggal dan waktu

        return view('dashboard.monitoring.high', [
            'title' => 'Inkubator | Monitoring',
            'bulan' => $bulan,
            'berat' => $berat,
        ]);
    }

    public function tambahSensor($suhu, $kelembapan, $berat) //untuk menerima data sensor dari alat
    {
        $suh = $suhu;
        $kelem =$kelembapan;
        $ber = $berat;

        Monitoring::insert([
            'suhu' => $suh,
            'kelembapan' => $kelem,
            'berat' => $ber,
            'created_at' => Carbon::now(),
        ]);


    }
}

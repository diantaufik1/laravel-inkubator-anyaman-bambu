<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $monitoring = DB::table('monitorings')
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();
        return view('dashboard.index', [
            'title' => 'Inkubator | Dashboard',
            'monitoring' => $monitoring,
        ]);

    }

    public function readberat(){
        $nama = Auth::user()->nama;
        $laporan = Kontrol::with('bambu');
        if ($nama == 'admin') {
            $laporan = DB::table('kontrols')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        foreach($laporan as $ko) {
            $berat = $ko->nilai_berat;
        }
        echo($berat);
        }else{
            $laporan->where('nama', 'like', '%'. $nama . '%');
            $lap = $laporan->get();
        foreach($lap as $ko) {
            $berat = $ko->nilai_berat;
        }
            echo($berat);
        }

        // return view('dashboard.laporan.index', [
        //     'title' => 'Inkubator | Laporan',
        //     'laporan' => $laporan->get(),
        // ]);

        // $monitoring = DB::table('monitorings')
        //         ->orderBy('id', 'desc')
        //         ->limit(1)
        //         ->get();
        // foreach($monitoring as $ko) {
        //     $berat = $ko->berat;
        // }
        // echo($berat);
    }
}

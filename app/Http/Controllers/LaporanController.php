<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index(){
        $nama = Auth::user()->nama;
        // $laporan = Kontrol::with('bambu');
        $laporan = Kontrol::latest();
        $user = User::all();

        if (request('cari')) {
            $laporan->where('nama', 'like', '%'. request('cari') . '%');
        }

        if ($nama == 'admin') {
            // $laporann = Kontrol::where('blower', '=', '1')->count();
            $laporan->get();
        }else{
            $laporan->where('nama', 'like', '%'. $nama . '%');
        }
        $total = 0;
        foreach ($laporan->get() as $laporr) {
           $total += $laporr->nilai_berat;
        }

//------------------------------------------------------------
    //total data adin
        // $adin = Kontrol::where('nama', '=', 'adin')->count();
        // $taufik = Kontrol::where('nama', '=', 'taufik')->count();
        // $lapo = $lapor / 2;
    //total semua data
        // $lap = Kontrol::all()->count();

        return view('dashboard.laporan.index', [
            'title' => 'Inkubator | Laporan',
            'laporan' => $laporan->get(),
            'count' => $laporan->count(),
            // 'ber' => $berat->get(),
            'user' => $user,
            'total' => $total,

            // 'count' => $laporan->count(),
        ]);
    }

    public function detail($id)
    {
        $detail = Kontrol::find($id);
        return view('dashboard.laporan.detail', [
            'title' => 'Inkubator | Detail Laporan ',
            'laporan' => $detail,
        ]);
    }

    public function delete($id)
    {
        $delete = DB::table('kontrols')
            ->where('id', $id)
            ->delete();

            return redirect('/laporan')
            -> with('Success', 'Berhasil Hapus');
            }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;

class MonitoringController extends Controller
{
    public function bacasuhu(){
        $sensor = Monitoring::latest()->first();
        return view('bacasuhu', ['data' => $sensor]);
    }

    public function bacaudara(){
        $sensor = Monitoring::latest()->first();
        return view('bacaudara', ['data' => $sensor]);
    }

    public function bacatanah(){
        $sensor = Monitoring::latest()->first();
        return view('bacatanah', ['data' => $sensor]);
    }

    public function simpansensor(){
        $monitoring = new Monitoring;
        $monitoring->tanggal = now()->format('Y-m-d');
        $monitoring->waktu = now()->format('H:i:s');
        $monitoring->suhu = request('nilaisuhu');
        $monitoring->kelembapan_udara = request('nilaiudara');
        $monitoring->kelembapan_tanah = request('nilaitanah');
        $monitoring->save();
        return with('Data Berhasil disimpan');
    }
}

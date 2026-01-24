<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Monitoring;

class MonitoringController extends Controller
{
    public function store(Request $request)
    {
        return Monitoring::create([
            'rak_id' => $request->rak_id,
            'suhu' => $request->suhu,
            'kadar_air' => $request->kadar_air,
            'berat' => $request->berat,
            'waktu_pengeringan' => $request->waktu_pengeringan
        ]);
    }
}


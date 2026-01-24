<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rak;


class RakController extends Controller
{
    public function store(Request $request)
    {
        return Rak::create([
            'user_id' => $request->user_id,
            'nama_rak' => $request->nama_rak
        ]);
    }
}


<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    public function index($userId)
{
    $raks = Rak::with('monitorings')
        ->where('user_id', $userId)
        ->get();

    return response()->json([
        'success' => true,
        'data' => $raks
    ]);
}

}

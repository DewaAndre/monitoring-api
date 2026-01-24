<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $fillable = [
        'rak_id',
        'suhu',
        'kadar_air',
        'berat',
        'waktu_pengeringan'
    ];

    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }
}

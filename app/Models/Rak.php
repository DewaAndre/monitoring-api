<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;

    protected $table = 'raks';

    protected $fillable = [
        'user_id',
        'nama_rak',
    ];

    public function monitorings()
    {
        return $this->hasMany(Monitoring::class, 'rak_id');
    }
}

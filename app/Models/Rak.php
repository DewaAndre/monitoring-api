<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $fillable = ['user_id', 'nama_rak'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function monitorings()
    {
        return $this->hasMany(Monitoring::class);
    }
}


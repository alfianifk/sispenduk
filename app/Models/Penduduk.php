<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KK;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 't_penduduk';
    protected $guarded = ['id'];

    public function kk() {
        return $this->belongsTo(KK::class);
    }

    // public function penduduk() {
    //     return $this->belongsTo(KK::class);
    // }
}

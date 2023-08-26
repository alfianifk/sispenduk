<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penduduk;

class KK extends Model
{
    use HasFactory;

    protected $table = 't_kk';
    protected $guarded = ['id'];

    public function penduduk() {
        return $this->hasMany(Penduduk::class);
    }

    // public function pendudukDetails() {
    //     return $this->hasOne(Penduduk::class);
    // }
}

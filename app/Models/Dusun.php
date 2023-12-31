<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    use HasFactory;
    protected $table = 't_dusun';
    protected $guarded = ['id'];
    
    public function kk(){
        return $this->hasMany(Kk::class);
    }
}

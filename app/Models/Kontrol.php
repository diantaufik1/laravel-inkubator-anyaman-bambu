<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrol extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nilai_berat',
        'nilai_suhu',
        'blower',
        
    ];

    public function bambu(){
        return $this->belongsTo(Bambu::class);
    }
}

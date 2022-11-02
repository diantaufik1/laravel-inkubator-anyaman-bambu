<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontrol;

class Bambu extends Model
{

    protected $fillable = [
        'id',
        'deskripsi'
    ];

    public function kontrol(){
        return $this->hasMany(Kontrol::class);
    }
}

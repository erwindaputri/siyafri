<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = "provinsi";

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
    }
}
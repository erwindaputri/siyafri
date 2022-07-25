<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contoh extends Model
{
    public $table ='contoh';
    protected $primaryKey ='id_contoh';

    function handleUploadgambar()
    {
        if (request()->hasFile('gambar')) {
            $this->handleDeleteGambar();
            $gambar = request()->file('gambar');
            $destination = "contoh";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $gambar->extension();
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteGambar(){
        $gambar= $this->gambar;
        if($gambar){
            $path = public_path($gambar);
        if(file_exists($path)){
            unlink($path);

        }
    return true;
        }
    }
}
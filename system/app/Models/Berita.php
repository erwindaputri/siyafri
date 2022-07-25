<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';

    function handleUploadgambar()
    {
        if (request()->hasFile('gambar')) {

            $gambar = request()->file('gambar');
            $destination = "berita";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $gambar->extension();
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteberita(){
        $judul= $this->judul;
        if($judul){
            $path = public_path($judul);
        if(file_exists($path)){
            unlink($path);

        }
    return true;
        }
    }
}

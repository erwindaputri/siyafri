<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ebook extends Model
{
    public $table ='ebook';
    protected $primaryKey ='id_ebook';

    function handleUploadgambar()
    {
        if (request()->hasFile('gambar')) {
            $this->handleDeleteebook();
            $gambar = request()->file('gambar');
            $destination = "ebook";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $gambar->extension();
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();

        }

    }

    function handleUploadfile()
    {
        if (request()->hasFile('file')) {
            $this->handleDeleteebook();
            $file = request()->file('file');
            $destination = "ebook";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();

        }


    }

    function handleDeleteebook(){
        $ebook= $this->ebook;
        if($ebook){
            $path = public_path($ebook);
        if(file_exists($path)){
            unlink($path);

        }
    return true;
        }
    }
}

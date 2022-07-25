<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Pengurus extends Authenticatable
{
    protected $table = 'pengurus';
    protected $primaryKey ="id_pengurus";

    function handleUpdateFoto()
    {
        if (request()->hasFile('foto')) {
            $this->handleDeleteFoto();
            $foto = request()->file('foto');
            $destination = "pengurus";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteFoto(){
        $foto= $this->foto;
        if($foto){
            $path = public_path($foto);
        if(file_exists($path)){
            unlink($path);

        }
    return true;
        }
    }
}

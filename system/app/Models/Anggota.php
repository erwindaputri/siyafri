<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Anggota extends Authenticatable
{
    public $table = 'anggota';
    public $primaryKey ="no_hp_anggota";
  
    function handleUpdateFoto()
    {
        if (request()->hasFile('foto')) {
            $this->handleDeleteFoto();
            $foto = request()->file('foto');
            $destination = "anggota";
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

    public function Amfibi()
    {
        return $this->belongsTo(Amfibi::class, 'no_hp_anggota');
    }

    public function Reptile()
    {
        return $this->belongsTo(Reptile::class, 'no_hp_anggota');
    }

}

<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Amfibi extends Model
{
    public $table ='amfibi';
    protected $primaryKey ='id_amfibi';

    function handleUploadgambar1()
    {
        if (request()->hasFile('gambar1')) {

            $gambar1 = request()->file('gambar1');
            $destination = "amfibi";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $gambar1->extension();
            $url = $gambar1->storeAs($destination, $filename);
            $this->gambar1 = "app/" . $url;
            $this->save();

        }
    }
    function handleUploadgambar2()
    {
        if (request()->hasFile('gambar2')) {

            $gambar2 = request()->file('gambar2');
            $destination = "amfibi";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $gambar2->extension();
            $url = $gambar2->storeAs($destination, $filename);
            $this->gambar2 = "app/" . $url;
            $this->save();

        }
    }
    function handleUploadgambar3()
    {
        if (request()->hasFile('gambar3')) {

            $gambar3 = request()->file('gambar3');
            $destination = "amfibi";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $gambar3->extension();
            $url = $gambar3->storeAs($destination, $filename);
            $this->gambar3 = "app/" . $url;
            $this->save();

        }
    }



    function handleDeleteAmfibi(){
        $nama= $this->nama;
        if($nama){
            $path = public_path($nama);
        if(file_exists($path)){
            unlink($path);

        }
    return true;
        }
    }



    public function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}

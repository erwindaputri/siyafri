<?php 

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Str;

class User extends Authenticatable{
	protected $table = 'user';
	protected $guarded = ['id'];
	use HasFactory, Notifiable;
	
	function users(){
		return $this->belongsTo(User::class, 'id');
	}

    function handleUpdateFoto()
    {
        if (request()->hasFile('foto')) {
            $this->handleDeleteFoto();
            $foto = request()->file('foto');
            $destination = "user";
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
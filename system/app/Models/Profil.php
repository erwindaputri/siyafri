<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Profil extends Model
{
public $table ='profil';
protected $primaryKey = 'id_profil';

    function handleUploadfiledata()
    {
        if (request()->hasFile('file_data')) {
            $this->handleDeletefiledata();
            $file_data = request()->file('file_data');
            $file_name = request()->file('file_data')->getClientOriginalName();
            $destination = "profil";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $file_data->extension();
            $url = $file_data->storeAs($destination, $filename);
            $this->file_data = "app/" . $url;
            $this->save();

        }
    }
    
    function handleDeletefiledata(){
        $filedata= $this->filedata;
        if($filedata){
            $path = public_path($filedata);
        if(file_exists($path)){
            unlink($path);

        }
    return true;
        }
    }
}
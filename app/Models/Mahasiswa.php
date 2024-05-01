<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    public function ktm(){
        return $this->hasOne(Ktm::class, 'id');
    }
    public $timestamps = false;
    // protected $fillable = [
    //     'nama',
    //     'nim',
    //     'jurusan',
    //     'fakultas'
    // ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $primaryKey = 'id';
    public function detail_dosen(){
        return $this->hasOne(DetailDosen::class, 'id');
    }
    public $timestamps = false;
}

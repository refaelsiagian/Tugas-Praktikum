<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDosen extends Model
{
    use HasFactory;
    protected $table = 'detail_dosen';
    protected $primaryKey = 'id';
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
    public $timestamps = false;
}

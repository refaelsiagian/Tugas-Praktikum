<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_dosen extends Model
{
    use HasFactory;
    protected $table = 'detail_dosen';
    protected $primaryKey = 'id_detail';
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}

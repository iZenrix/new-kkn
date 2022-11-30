<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitoring_mh extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'file_mhs',
        'keterangan',
        'minggu'
    ];

    public function getDataNamaKetua(){
        return $this->belongsTo(User::class,'id_user', 'id');
    }
}

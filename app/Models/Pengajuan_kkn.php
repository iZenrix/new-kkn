<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_kkn extends Model
{
    use HasFactory;

    protected $fillable = ['nama_tempat', 'job', 'user_id'];

}

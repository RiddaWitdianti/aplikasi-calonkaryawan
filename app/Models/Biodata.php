<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    // public function datapendidikanterakhir()
    // {
    //     return $this->belongsTo(DataPendidikanTerakhir::class);
    // }


    // public function datariwayatpekerjaan()
    // {
    //     return $this->belongsTo(DataRiwayatPekerjaan::class);
    // }

    public function datariwayatpelatihan()
    {
        return $this->hasMany(DataRiwayatPelatihan::class);
    }

    protected $fillable = [
        'posisi',
        'nama',
        'noktp',
        'tempatlahir',
        'tgllahir',
        'jeniskelamin',
        'agama',
        'goldarah',
        'status',
        'alamatktp',
        'alamattinggal',
        'email',
        'notelp',
        'notelpbisadihubungi',
        'skill',
        'Ketersediaan',
        'penghasilandiharapkan',
    ];
}

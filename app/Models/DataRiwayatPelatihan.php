<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRiwayatPelatihan extends Model
{
    public $table = "datariwayatpelatihans";
    use HasFactory;

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'datariwayatpelatihan_id');
    }

    protected $fillable = [
        'namakursus',
        'sertififkat',
        'tahun',
    ];
}

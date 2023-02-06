<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRiwayatPekerjaan extends Model
{
    public $table = "datariwayatpekerjaans";
    use HasFactory;

    // public function biodata()
    // {
    //     return $this->hasMany(Biodata::class);
    // }

    protected $fillable = [
        'namaperusahaan',
        'posisiterakhir',
        'pendapatanterakhir',
        'tahun',
    ];
}

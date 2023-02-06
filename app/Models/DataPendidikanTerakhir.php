<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendidikanTerakhir extends Model
{
    public $table = "datapendidikanterakhirs";
    use HasFactory;

    // public function biodata()
    // {
    //     return $this->hasMany(Biodata::class);
    // }

    protected $fillable = [
        'namainstitusi',
        'jurusan',
        'tahunlulus',
        'ipk',
    ];
}

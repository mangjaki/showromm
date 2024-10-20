<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'url_foto','merk','harga','tahun','cabang','stok'
    ];
}

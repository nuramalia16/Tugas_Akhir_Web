<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable =['Nama','Tahun','Plat','Harga','Merek','Jumlah_Kursi','Gambar'];
    protected $table = 'cars';
    public $timestamps = false;
}

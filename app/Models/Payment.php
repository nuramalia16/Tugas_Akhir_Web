<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable =['id','nama','nik','tanggal','gambar_payment','foto_ktp'];
    protected $table = 'drivers';
    public $timestamps = false;
}

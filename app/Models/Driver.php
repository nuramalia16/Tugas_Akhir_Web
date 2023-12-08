<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable =['id','Nama','Gender','Umur','Gambar'];
    protected $table = 'drivers';
    public $timestamps = false;
}

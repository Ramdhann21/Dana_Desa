<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporans';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['nama', 'keperluan', 'tanggal','dana_masuk', 'dana_keluar','total','tujuan'];
    public $timestamps = false;

}

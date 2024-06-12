<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dana extends Model
{
    use HasFactory;
    use HasFactory;
    protected $Laporan = 'Danas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['nama','tanggal','total',];
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    public $primaryKey = 'lokasi_id';

    protected $fillable = [
        'lokasi_kod',
        'lokasi_detail',
        'lokasi_status',
    ];
}

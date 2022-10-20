<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maklumbalas extends Model
{
    use HasFactory;
    public $primaryKey = 'maklumbalas_id';

    protected $fillable = [
        'maklumbalas_report_id',
        'maklumbalas_date',
        'maklumbalas_jabatan',
        'maklumbalas_catatan',
        
    ];
}

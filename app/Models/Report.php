<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    public $primaryKey = 'report_id';

    protected $fillable = [
        'report_admin_id',
        'report_tarikh',
        'report_masa',
        'report_lokasi',
        'report_daerah',
        'report_kaduan',
        'report_saduan',
        'report_jabatan',
        'report_masalapor',
        'report_laporan',
        'report_image',
        'report_status',
        
    ];
}

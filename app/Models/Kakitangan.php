<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kakitangan extends Model
{
    use HasFactory;
    public $primaryKey = 'kakitangan_id';

    protected $fillable = [
        'kakitangan_no',
        'kakitangan_name',
        'kakitangan_jenis',
        
    ];
}

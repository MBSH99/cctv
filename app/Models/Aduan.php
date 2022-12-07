<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;
    public $primaryKey = 'aduan_id';

    protected $fillable = [
        'aduan_kod',
        'aduan_detail',
        'aduan_status',
        
    ];
}

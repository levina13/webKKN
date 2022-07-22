<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sejarah extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'isi'
    ];
    protected $primaryKey = 'id_sejarah';
}

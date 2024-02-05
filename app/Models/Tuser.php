<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuser extends Model
{
    use HasFactory;

    protected $table = "tambah_user";

    protected $fillable = [
        'email',
        'nip', 
        'nama', 
        'jabatan', 
        'hak_akses', 
        'foto'
    ];
}

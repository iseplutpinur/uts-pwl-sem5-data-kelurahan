<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    protected $table = 'kecamatans';

    public function kelurahans()
    {
        return $this->hasMany(Kelurahan::class, 'kecamatan_id', 'id');
    }
}

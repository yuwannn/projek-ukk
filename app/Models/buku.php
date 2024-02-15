<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kategoribuku;

class buku extends Model
{
    protected $primaryKey = 'bukuid';

    public function kategori () {
        return $this->belongsTo(kategoribuku::class, 'kategori');
    }

    use HasFactory;
}

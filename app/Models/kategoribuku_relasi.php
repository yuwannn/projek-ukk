<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoribuku_relasi extends Model
{
    use HasFactory;

    public function kategori () {
        return $this->belongsTo(kategoribuku::class, 'kategorid', 'kategoriid');
    }

    public function buku () {
        return $this->belongsTo(buku::class, 'bukuid', 'bukuid');
    }

}

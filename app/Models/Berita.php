<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Attributes\Tag;

class Berita extends Model
{
    protected $fillable = ['judul', 'isi', 'thumbnail', 'tanggal', 'lokasi'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

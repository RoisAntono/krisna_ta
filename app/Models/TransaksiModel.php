<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class TransaksiModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['produk'];

    //Relasi tabel produk dan Berita
    public function produk()
    {
        return $this->belongsTo(ProdukModel::class);
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $table = 'aduans';
    protected $fillable = [
        'id_kategori', 'id_subkategori', 'id_pelapor', 'id_wil', 'id_kec', 'id_kel', 'id_opd', 'alamat', 'bukti', 'bukti_2',
        'pesan', 'status', 'priority'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pelapor');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function sub()
    {
        return $this->belongsTo(Subkategori::class, 'id_subkategori');
    }

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'id_wil');
    }

    public function kec()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kec');
    }

    public function kel()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kel');
    }

    public function opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id');
    }
}

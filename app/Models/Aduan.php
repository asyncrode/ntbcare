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
}

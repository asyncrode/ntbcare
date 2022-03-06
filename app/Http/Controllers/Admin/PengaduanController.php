<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Subkategori;
use App\Models\User;
use App\Models\Komentar;
use App\Models\Wilayah;
use App\Models\Opd;
use Auth;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class PengaduanController extends Controller
{
    public function index()
    {
        // $roles = Auth::user()->roles->pluck('name');
        // dd($roles);
        if (Auth::user()->roles->pluck('name')->first() == 'super-admin') {

            $aduan = Aduan::all()->sortByDesc('created_at');
            $kategori = Kategori::all();
            $user = User::all();
            $infra = Aduan::all()->where('id_kategori', '=', 1)->count();
            $noninfra = Aduan::all()->where('id_kategori', '=', 2)->count();
            $waiting = Aduan::all()->where('id_kategori', '=', 'Waiting')->count();
            return view('admin.pengaduan.index', compact('aduan', 'kategori', 'user', 'infra', 'noninfra'));
        } else {

            $opd = Opd::where('id_admin', Auth::user()->id)->first();

            $aduan = Aduan::where('id_opd', $opd->id)->get();

            $kategori = Kategori::all();

            $sub = Subkategori::all();

            return view('admin.pengaduan.index', compact('aduan', 'kategori', 'sub'));
        }



        // $aduan = Aduan::join('users', 'users.id', '=', 'aduans.id_pelapor')
        //     ->join('kategoris', 'kategoris.id', '=', 'aduans.id_kategori')
        //     ->join('subkategoris', 'subkategoris.id', '=', 'aduans.id_subkategori')
        //     ->join('wilayahs', 'wilayahs.id', '=', 'aduans.id_wil')
        //     ->get();

    }

    public function detail($id)
    {
        $aduan = Aduan::where('aduans.id', $id)->first();
        $komentar = Komentar::where('id_aduan', $id)->get();
        $detail = Aduan::find($id);
        return view('admin.pengaduan.detailaduan', compact('detail', 'aduan', 'komentar'));
    }

    public function getData()
    {
        $kategori = Kategori::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $sub = Subkategori::all();
        $wilayah = Wilayah::all();

        $data = [
            'kategori' => $kategori,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'sub' => $sub,
            'wilayah' => $wilayah
        ];
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $gambar = $request->bukti;
        $gambar_ext = $gambar->getClientOriginalExtension();
        $name = $gambar->getClientOriginalName();
        '.' . $gambar_ext;
        $path = public_path() . '/upload/aduan';
        $upload = $gambar->move($path, $name);

        $dokumen = $request->bukti_2;
        $doc_ext = $dokumen->getClientOriginalExtension();
        $dokumen_name = $dokumen->getClientOriginalName();
        '.' . $doc_ext;
        $path = public_path() . '/upload/aduan';
        $upload = $dokumen->move($path, $dokumen_name);

        $aduan = new Aduan;
        $aduan->id_kategori = $request->kategori;
        $aduan->id_subkategori = $request->subkategori;
        $aduan->id_wil = $request->wilayah;
        $aduan->id_kec = $request->kecamatan;
        $aduan->id_kel = $request->kelurahan;
        $aduan->id_pelapor = Auth::user()->id;
        $aduan->alamat = $request->alamat;
        $aduan->bukti = $name;
        $aduan->bukti_2 = $dokumen_name;
        $aduan->pesan = $request->pesan;
        $aduan->status = 'Waiting';
        $aduan->save();
        return response()->json([
            'message' => 'Pengaduan berhasi dikirim'
        ], 200);
    }

    public function editstat(Request $request, $id)
    {
        $aduan = Aduan::find($id);
        $aduan->status = $request->status;
        $aduan->save();
        return response()->json([
            'message' => 'Status Pengaduan Berhasil Dirubah'
        ], 200);
    }

    public function getOpd()
    {
        $opd = Opd::all();
        return response()->json([
            'message' => 'Data OPD',
            'data'    => $opd
        ]);
    }

    public function forward(Request $request, $id)
    {
        $aduan = Aduan::find($id);
        $aduan->id_opd = $request->opd;
        $aduan->save();
        return response()->json([
            'message' => 'Forward ke Opd Berhasil'
        ], 200);
    }

    public function delete($id)
    {
        $aduan = Aduan::find($id);
        $aduan->delete();
        return response()->json(200);
    }
}

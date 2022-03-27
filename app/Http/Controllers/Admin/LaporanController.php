<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\Kategori;
use App\Models\Opd;
use App\Models\Subkategori;
use App\Models\Wilayah;
use App\Models\Komentar;
use DataTables;


class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.laporan.index', compact('kategori'));
    }

    public function getLaporan(Request $request)
    {
        if ($request->ajax()) {
            $laporan = Aduan::select('*');
            return Datatables::of($laporan)
                ->addIndexColumn()
                ->addColumn('created_at', function ($laporan) {

                    return date('d-m-Y h:i', strtotime($laporan->created_at));
                })
                ->addColumn('id_kategori', function ($laporan) {
                    if ($laporan->id_kategori != null) {
                        return $laporan->kategori->kategori;
                    }
                })
                ->addColumn('id_pelapor', function ($laporan) {
                    if ($laporan->id_pelapor != null) {
                        return $laporan->user->name;
                    }
                })
                ->addColumn('id_aduan', function ($laporan) {
                    if ($laporan->id_aduan != null) {
                        return $laporan->aduan->status;
                    }
                })
                ->addColumn('bukti', function ($laporan) {
                    $url = asset('upload/aduan/' . $laporan->bukti);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" style = "max-width:50%;" >';
                    return $img;
                })
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('kategori'))) {
                        $instance->where('id_kategori', $request->get('kategori'))->latest();
                    } else {
                        $instance->select('*');
                    }
                    $awal = $request->get('awal');
                    $akhir = $request->get('akhir');

                    if (!empty($awal) and !empty($akhir)) {
                        $instance->whereBetween('created_at', [$awal, $akhir])->latest();;
                    } else {
                        $instance->select('*');
                    }
                }, true)
                ->rawColumns(['kategori', 'bukti'])
                ->make(true);
        }
    }

    public function index_status()
    {
        return view('admin.laporan_status.index');
    }

    public function getLaporanStatus(Request $request)
    {
        if ($request->ajax()) {
            $laporan = Aduan::select('*');
            return Datatables::of($laporan)
                ->addIndexColumn()
                ->addColumn('created_at', function ($laporan) {

                    return date('d-m-Y h:i ', strtotime($laporan->created_at));
                })
                ->addColumn('id_kategori', function ($laporan) {
                    if ($laporan->id_kategori != null) {
                        return $laporan->kategori->kategori;
                    }
                })
                ->addColumn('id_pelapor', function ($laporan) {
                    if ($laporan->id_pelapor != null) {
                        return $laporan->user->name;
                    }
                })
                ->addColumn('id_opd', function ($laporan) {
                    if ($laporan->id_opd != null) {
                        return $laporan->opd->nama;
                    } else {
                        return 'Opd Belum Di Input';
                    }
                })
                ->addColumn('id_aduan', function ($laporan) {
                    if ($laporan->id_aduan != null) {
                        return $laporan->aduan->status;
                        return $laporan->aduan->alamat;
                    }
                })
                ->addColumn('bukti', function ($laporan) {
                    $url = asset('upload/aduan/' . $laporan->bukti);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" style = "max-width:50%;" >';
                    return $img;
                })
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('status'))) {
                        $instance->where('status', $request->get('status'))->latest();
                    } else {
                        $instance->select('*');
                    }
                    $awal = $request->get('awal');
                    $akhir = $request->get('akhir');

                    if (!empty($awal) and !empty($akhir)) {
                        $instance->whereBetween('created_at', [$awal, $akhir])->latest();;
                    } else {
                        $instance->select('*');
                    }
                }, true)
                ->rawColumns(['status', 'bukti'])
                ->make(true);
        }
    }

    public function index_subkategori()
    {
        $subkategori = Subkategori::all();
        return view('admin.laporan_subkategori.index', compact('subkategori'));
    }

    public function getLaporanSub(Request $request)
    {
        if ($request->ajax()) {
            $laporan = Aduan::select('*');
            return Datatables::of($laporan)
                ->addIndexColumn()
                ->addColumn('created_at', function ($laporan) {

                    return date('d-m-Y h:i', strtotime($laporan->created_at));
                })
                ->addColumn('id_subkategori', function ($laporan) {
                    if ($laporan->id_subkategori != null) {
                        return $laporan->subkategori->subkategori;
                    }
                })
                ->addColumn('id_pelapor', function ($laporan) {
                    if ($laporan->id_pelapor != null) {
                        return $laporan->user->name;
                    }
                })
                ->addColumn('id_aduan', function ($laporan) {
                    if ($laporan->id_aduan != null) {
                        return $laporan->aduan->status;
                    }
                })
                ->addColumn('bukti', function ($laporan) {
                    $url = asset('upload/aduan/' . $laporan->bukti);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" style = "max-width:50%;" >';
                    return $img;
                })
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('subkategori'))) {
                        $instance->where('id_subkategori', $request->get('subkategori'))->latest();
                    } else {
                        $instance->select('*');
                    }
                    $awal = $request->get('awal');
                    $akhir = $request->get('akhir');

                    if (!empty($awal) and !empty($akhir)) {
                        $instance->whereBetween('created_at', [$awal, $akhir])->latest();;
                    } else {
                        $instance->select('*');
                    }
                }, true)
                ->rawColumns(['bukti', 'subkategori'])
                ->make(true);
        }
    }

    public function index_wilayah()
    {
        $wilayah = Wilayah::all();
        return view('admin.laporan_wilayah.index', compact('wilayah'));
    }

    public function getLaporanWilayah(Request $request)
    {
        if ($request->ajax()) {
            $laporan = Aduan::select('*');
            return Datatables::of($laporan)
                ->addIndexColumn()
                ->addColumn('created_at', function ($laporan) {

                    return date('d-m-Y h:i', strtotime($laporan->created_at));
                })
                ->addColumn('id_wil', function ($laporan) {
                    if ($laporan->id_wil != null) {
                        return $laporan->wilayah->nama_will;
                    }
                })
                ->addColumn('id_pelapor', function ($laporan) {
                    if ($laporan->id_pelapor != null) {
                        return $laporan->user->name;
                    }
                })
                ->addColumn('id_aduan', function ($laporan) {
                    if ($laporan->id_aduan != null) {
                        return $laporan->aduan->status;
                    }
                })
                ->addColumn('bukti', function ($laporan) {
                    $url = asset('upload/aduan/' . $laporan->bukti);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" style = "max-width:50%;" >';
                    return $img;
                })
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('wilayah'))) {
                        $instance->where('id_wil', $request->get('wilayah'))->latest();
                    } else {
                        $instance->select('*');
                    }
                    $awal = $request->get('awal');
                    $akhir = $request->get('akhir');

                    if (!empty($awal) and !empty($akhir)) {
                        $instance->whereBetween('created_at', [$awal, $akhir])->latest();;
                    } else {
                        $instance->select('*');
                    }
                }, true)
                ->rawColumns(['bukti', 'wilayah'])
                ->make(true);
        }
    }

    public function index_opd()
    {
        $opd = Opd::all();
        return view('admin.laporan_opd.index', compact('opd'));
    }

    public function getLaporanOpd(Request $request)
    {
        if ($request->ajax()) {
            $laporan = Aduan::select('*');
            return Datatables::of($laporan)
                ->addIndexColumn()
                ->addColumn('created_at', function ($laporan) {

                    return date('d-m-Y h:i', strtotime($laporan->created_at));
                })
                ->addColumn('id_opd', function ($laporan) {
                    if ($laporan->id_opd != null) {
                        return $laporan->opd->nama;
                    } else {
                        $fx = '';
                        $fx = $fx . '<span class="badge badge-danger">Aduan belum diteruskan</span>';
                        return $fx;
                    }
                })
                ->addColumn('id_pelapor', function ($laporan) {
                    if ($laporan->id_pelapor != null) {
                        return $laporan->user->name;
                    }
                })
                ->addColumn('id_aduan', function ($laporan) {
                    if ($laporan->id_aduan != null) {
                        return $laporan->aduan->status;
                    }
                })
                ->addColumn('bukti', function ($laporan) {
                    $url = asset('upload/aduan/' . $laporan->bukti);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" style = "max-width:50%;" >';
                    return $img;
                })
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('opd'))) {
                        $instance->where('id_opd', $request->get('opd'))->latest();
                    } else {
                        $instance->select('*');
                    }
                    $awal = $request->get('awal');
                    $akhir = $request->get('akhir');

                    if (!empty($awal) and !empty($akhir)) {
                        $instance->whereBetween('created_at', [$awal, $akhir])->latest();;
                    } else {
                        $instance->select('*');
                    }
                }, true)
                ->rawColumns(['bukti', 'id_opd'])
                ->make(true);
        }
    }

    public function index_komentar()
    {
        $opd = Opd::all();
        return view('admin.laporan_komentar.index', compact('opd'));
    }

    public function getLaporanKomentar(Request $request)
    {
        if ($request->ajax()) {
            $laporan = Aduan::with('komentar')->latest();
            return Datatables::of($laporan)
                ->addIndexColumn()
                ->addColumn('created_at', function ($laporan) {

                    return date('d-m-Y h:i', strtotime($laporan->created_at));
                })
                ->addColumn('id_opd', function ($laporan) {
                    if ($laporan->id_opd != null) {
                        return $laporan->opd->nama;
                    } else {
                        $fx = '';
                        $fx = $fx . '<span class="badge badge-danger">Aduan belum diteruskan</span>';
                        return $fx;
                    }
                })
                ->editColumn('komentar', function ($laporan) {
                    if ($laporan != null) {
                        $data = array();
                        $admin = array();
                        $user = array();
                        $fx = array();
                        $content[] = array();

                        foreach ($laporan->komentar as $d => $val) {


                            // $data[] = $d->komentar;
                            if ($val->id_user != null) {
                                $data[] = $val->komentar;
                                $user[] = $val->user->name;
                                $fx[] = "<b>" . $user[$d] . "</b> : " . $data[$d] . "<br><br>";
                            } else {
                                $data[] = $val->komentar;
                                $user[] = $val->admin->nama;
                                $fx[] = "<b>" . $user[$d] . "</b> : " . $data[$d] . "<br><br>";
                            }
                        }
                        $string = implode("", $fx);
                        // $data = json_decode($laporan->komentar , true);
                        return $string;
                    }
                })
                ->addColumn('id_pelapor', function ($laporan) {
                    if ($laporan->id_pelapor != null) {
                        return $laporan->user->name;
                    }
                })
                ->addColumn('id_aduan', function ($laporan) {
                    if ($laporan->id_aduan != null) {
                        return $laporan->aduan->status;
                    }
                })
                ->addColumn('bukti', function ($laporan) {
                    $url = asset('upload/aduan/' . $laporan->bukti);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" style = "max-width:50%;" >';
                    return $img;
                })
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('opd'))) {
                        $instance->where('id_opd', $request->get('opd'))->latest();
                    } else {
                        $instance->select('*');
                    }
                    $awal = $request->get('awal');
                    $akhir = $request->get('akhir');

                    if (!empty($awal) and !empty($akhir)) {
                        $instance->whereBetween('created_at', [$awal, $akhir])->latest();;
                    } else {
                        $instance->select('*');
                    }
                }, true)
                ->rawColumns(['bukti', 'id_opd', 'komentar'])
                ->make(true);
        }
    }
    
}

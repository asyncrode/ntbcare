<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\Kategori;
use App\Models\Wilayah;
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

                    return date('d-m-Y', strtotime($laporan->created_at));
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
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                    return $btn;
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
                ->rawColumns(['action', 'kategori'])
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
                        return $laporan->opd;
                    }
                })
                ->addColumn('id_aduan', function ($laporan) {
                    if ($laporan->id_aduan != null) {
                        return $laporan->aduan->status;
                        return $laporan->aduan->alamat;
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                    return $btn;
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
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }
}

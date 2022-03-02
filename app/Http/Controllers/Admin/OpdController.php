<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Opd;
use App\Models\Admin;
use Auth;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use DataTables;

class OpdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('admin.opd.index');
    }

    public function getOpd()
    {
        $opd = Opd::all();
        return Datatables::of($opd)
            ->addIndexColumn()
            ->addColumn('id_admin', function ($opd) {
                if ($opd->id_admin != null) {
                    return $opd->admin->nama;
                }
            })
            ->addColumn('action', function ($row) {
                $btn = '';
                // $btn = $btn.'<a href="javascript:void(0)" data-id="'.$row->id.'" id="edit" class="edit btn btn-primary btn-sm">Edit</a>';
                // $btn = $btn.'<a href="javascript:void(0)" data-id="'.$row->id.'" id="delete" class="delete btn btn-danger btn-sm">Delete</a>';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getUser()
    {
        $admin = Admin::all()->except(Auth::id());
        // dd($admin);
        return response()->json(
            [
                'status' => 'List Admin',
                'data' => $admin
            ]
        );
    }

    public function store(Request $request)
    {
        $opd = new Opd;
        $opd->nama = $request->nama;
        $opd->id_admin = $request->admin;
        $opd->save();
        return response()->json([
            'message' => 'Opd Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $opd = Opd::find($id);
        $admin = Admin::all()->except(Auth::id());
        return response()->json([
            'message' => 'Opd Edit',
            'data'    => $opd,
            'admin'   => $admin
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $opd = Opd::find($id);
        $opd->nama = $request->nama;
        $opd->id_admin = $request->admin;
        $opd->save();
        return response()->json([
            'message' => 'Opd Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $opd = Opd::find($id);
        $opd->delete();
        return response()->json([
            'message' => 'Opd Deleted',
        ], 200);
    }
}

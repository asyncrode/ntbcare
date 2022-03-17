<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use DataTables;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.admin.index');
    }

    public function getAdmin()
    {
        $admin = Admin::all();
        return Datatables::of($admin)
            ->addIndexColumn()
            ->addColumn('created_at', function ($admin) {

                return date('d-m-Y h:i', strtotime($admin->created_at));
            })
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getRole()
    {
        $role = Role::all();
        return response()->json([
            'message' => 'Data Role',
            'role'    => $role
        ]);
    }

    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->get('password'));
        $admin->assignRole($request->role);
        $admin->save();
        return response()->json([
            'message' => 'User berhasil ditambah'
        ], 200);
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        $role = Role::all();
        return response()->json([
            'message' => 'Edit Admin',
            'data'   => $admin,
            'role'    => $role
        ]);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->syncRoles($request->role);
        $admin->save();
        return response()->json([
            'message' => 'Update Admin Berhasil'
        ], 200);
    }

    public function delete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return response()->json([
            'message' => 'Admin Deleted'
        ], 200);
    }
}

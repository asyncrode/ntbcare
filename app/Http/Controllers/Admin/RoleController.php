<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Auth;
use DataTables;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.role.index');
    }

    public function getRole()
    {
        $role = Role::all();
        return Datatables::of($role)
            ->addIndexColumn()
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

    public function store(Request $request)
    {
        $role = new Role;
        $role->name = $request->nama;
        $role->guard_name = 'admins';
        $role->save();
        return response()->json([
            'message' => 'Role Berhasil Di Tambah'
        ],200);
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return response()->json([
            'message' => 'Role Edit',
            'data'    => $role,
        ]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->nama;
        $role->guard_name = 'admins';
        $role->save();
        return response()->json([
            'message'   => 'Role Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
        return response()->json([
            'message'   => 'Role Deleted'
        ],200);
    }
}

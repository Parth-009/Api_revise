<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DataTables;

class DatatableController extends Controller
{
    public function index(){
        return view('datatable');
    }

    public function getUser(Request $request){
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="/user/edit" class="edit btn btn-primary btn-sm">View</a>';
                           $btn =$btn . '<a href="" class="edit btn btn-danger btn-sm">Delete</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('datatable');

    }
}



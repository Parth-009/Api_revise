<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Exports\StudentExport;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function apiGetData(){
        return Student::all();
    }   


    public function apiPostData(Request $request){
        //dd($request);
        //dd($request->fname);
        $insert = new Student;
        $insert->FName = $request->fname;
        $insert->LName = $request->lname;
        $insert->Address = $request->address;
        $insert->Phone = $request->phone;
        $insert->Gender =  $request->gender;
        $result= $insert->save();

        if($result == true){
            return response()->json(['status' =>'Data has been added successfully'],200);
        }
    }


    public function apiDeleteData($id){
        $user = Student::find($id);
        $result = $user->delete();
        
        if($result){
            return response()->json(['status'=> 'Student deleted successfully'],200);
        }
    }

    public function viewStudentData(){
        $data = Student::all();
        return view('exportpdfexcel',compact('data'));
    }

    public function exportStudentPdf(){
        $query = Student::all();
        $data=[
                'title' => 'Student Data',
                'value' => $query
        ];
        $pdf=PDF::loadview('pdf',$data);
        return $pdf->download('StudentData.pdf');
    }

    public function exportStudentCsv(){
        $query = Student::all();
        $data =[
                'value' => $query
        ];
        return Excel::download(new StudentExport($data), 'studentsdata.xlsx');
    }
}

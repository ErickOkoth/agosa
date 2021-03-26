<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Darasa;
use App\Student;

class StudentController extends Controller
{
    
public function adddarasa(){
    return view('darasa');

}

public function addstudent(){
    $darasas=Darasa::all();
    return view('student',compact('darasas'));
}
public  function poststudent(Request $request){
    $student=Student::create($request->all());
    return redirect()->back()->with('success','student registereed successfully');
}
public  function postdarasa(Request $request){
    $student=Darasa::create($request->all());
    return redirect()->back()->with('success','student registereed successfully');
}
public function viewdarasa(){
    $darasas=Darasa::all();
    return view('viewdarasa',compact('darasas'));
}
public function update(Request $request){
    $request->validate([
       'name'=>'required',
       'code'=>'required',
       'fee'=>'required',
    ]);
$darasa=Darasa::update($request->all());
  
    return redirect()->route('viewdarasa')->with('success','Class updated successfully');

}
public function editdarasa($id){
    $darasa=Darasa::find($id);
    $student=Student::all();
    return  view('editdarasa',compact('darasa','student'));
}
public function remove($id){
    $darasa=Darasa::find($id);
    $darasa->delete();
    return redirect()->back()->with('success','classes remove successfully');
}
public function viewstudent(){
    $students=Student::all();
     return view('viewstudent',compact('students'));
}
public function removed($id){
    $student=Student::find($id);
    $student->delete();
    return redirect()->back()->with('success','classes remove successfully');
}
public function editstudent($id){
    $student=Student::find($id);
    $darasas=Darasa::all();
    return  view('editstudent',compact('student','darasas'));
}
public function updated(Request $request,$id){
    $request->validate([
       'name'=>'required',
       'adm_no'=>'required',
       'parent_phone'=>'required',
       'darasa_id'=>'required',

       'datebirth'=>'required',
       'email_address'=>'required',
    ]);

  $student=Student::updated($request->all());
    return redirect()->route('viewstudent')->with('success','Student updated successfully');


}
}
        
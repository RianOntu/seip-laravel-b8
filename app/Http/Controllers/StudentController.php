<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        
            $students = Student::all();
    
           
    
            return view('students.index', compact('students'));
        
    }
    public function show($id)
    {
        $student = Student::find($id);

        return view('students.show', compact('student'));
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        

        return redirect()
            ->route('students.index')
            ->withMessage('Deleted Successfully!');
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        if($request->Gardening){
            $data='Gardening';
        }
        if($request->Playing_football){
            $data='Playing football';
        }
        if($request->Gardening && $request->Playing_football ){
            $data='Gardening and Playing football';
        }
       Student::create([
        'name'=>$request->name,
        'dob'=>$request->dob,
        'gender'=>$request->flexRadioDefault,
        'hobbies'=>$data
       ]);

       return redirect()->route('students.index')->withMessage('Created Successfully!');
    }
    public function edit($id){
        $student=Student::find($id);
        return view('students.edit',compact('student'));
    }
    public function update(Request $request,$id){
        $student=Student::find($id);
        if($request->Gardening){
            $data='Gardening';
        }
        if($request->Playing_football){
            $data='Playing football';
        }
        if($request->Gardening && $request->Playing_football ){
            $data='Gardening and Playing football';
        }
        $data1=[
            'name'=>$request->name,
            'dob'=>$request->dob,
            'gender'=>$request->flexRadioDefault,
            'hobbies'=>$data
        ];
        $student->update($data1);
        return redirect()->route('students.index')->withMessage('Updated Successfully!');
    }
}

<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;


use App\Models\Student;
use App\Http\Requests\Panel\StudentFormRequest;

class StudentController extends Controller
{

	private $student;

	public function __construct( Student $student ){

		$this->student = $student;

	}
    
    public function index(){

    	$students = $this->student->all();
    	return view('panel/student/student', compact('students'));
    }

    public function create(){
    	return view('panel/student/addStudent');
    }

    public function store(StudentFormRequest $request){

        // dd($request->all());
        // dd($request->only(["name", "email", "password", "label"]));
        // dd($request->except(["_token"]));
        // dd($request->input(["_token"]));

        $dataForm = $request->all();
        
        $insert = $this->student->create( $dataForm );

        if( $insert ){
            return redirect()->route('panel.student.index');
        } else {
            return redirect()->route('panel.student.create');
        }

    }

    public function update( StudentFormRequest $request, $id ){

        
        $dataForm = $request->all();

        $studentAccount = $this->student->find($id);
        $update = $studentAccount->update( $dataForm );
        
        if( $update ){
            return redirect()->route('panel.student.index');
        } else {
            return redirect()->route('panel.student.edit', $id)->with(['errors' => 'Falha ao Editar']);
        }

    }

    public function destroy( $id ){
        
        $studentAccount = $this->student->find($id);
        $delete = $studentAccount->delete();

        if( $delete ){
            return redirect()->route('panel.student.index');
        } else {
            return redirect()->route('panel.student.index')->with(['errors' => 'Falha ao deletar esta conta']);
        }

    }

    public function edit($id){
        
        $studentAccount = $this->student->find($id);

        return view('panel/student/addStudent', compact('studentAccount'));

    }

}

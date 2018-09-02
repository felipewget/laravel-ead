<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Http\Requests\Panel\ClassroomFormRequest;

class ClassroomController extends Controller
{
    
    private $classroom;

	public function __construct( Classroom $classroom ){

		$this->classroom = $classroom;

	}
    
    public function index(){

    	$teams = $this->classroom->all();
    	return view('panel/team/team', compact('teams') );
    }

    public function create(){
    	return view('panel/team/addTeam');
    }

    public function store(ClassroomFormRequest $request){

    	$dataForm = $request->all();
    	
    	$insert = $this->classroom->create( $dataForm );

    	if( $insert ){

            return $insert->id;
    		
    	} else {
    		return redirect()->route('panel.Classroom.create');
    	}

    }

    public function update( ClassroomFormRequest $request, $id ){

        $dataForm = $request->all();

        $adminAccount = $this->classroom->find($id);
        $update = $adminAccount->update( $dataForm );
        
        if( $update ){
            return redirect()->route('panel.Classroom.index');
        } else {
            return redirect()->route('panel.Classroom.edit', $id)->with(['errors' => 'Falha ao Editar']);
        }

    }

    public function destroy( $id ){
        
        $adminAccount = $this->classroom->find($id);
        $delete = $adminAccount->delete();

        if( $delete ){
            return redirect()->route('panel.Classroom.index');
        } else {
            return redirect()->route('panel.Classroom.index')->with(['errors' => 'Falha ao deletar esta conta']);
        }

    }

    public function edit($id){
        
        $adminAccount = $this->classroom->find($id);

        return view('panel/account/addAccounts', compact('adminAccount'));

    }

}

<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Course;
use App\Models\Module;

use App\Http\Requests\Panel\ModuleFormRequest;

class ModuleController extends Controller
{

	public function __construct( Course $curse, Module $module ){

		$this->module = $module;
		$this->curse = $curse;

	}
    
    public function index($idCourse){

    	$course = $this->curse->find( $idCourse );
    	$modules = $this->module->all();

    	if( isset($course) && isset($course->id) ){

			return view('panel/module/modules', compact('course', 'modules'));

		} else {
			return null;
		}
	}

	public function create( $idCourse ){

		return view('panel/module/addModule', compact('idCourse'));

	}

	public function store(ModuleFormRequest $request){

        $dataForm = $request->except(['_token']);

        $idCourse = $dataForm['id_course'];
        
        $insert = $this->module->create( $dataForm );

        if( $insert ){
            return redirect()->route('panel.module.index', $idCourse);
        } else {
            return redirect()->route('panel.module.create', $idCourse);
        }

    }

    public function edit( $idCourse, $idModule ){

        $module = $this->module->find( $idModule );

        return view('panel/module/addModule', compact('idCourse', 'idModule', 'module'));

    }

    public function update( ModuleFormRequest $request, $idCourse, $idModule ){

        $dataForm = $request->only(['title', 'order', 'unlock_after_timestamp']);

        $module = $this->module->find($idModule);
        $update = $module->update( $dataForm );
        
        if( $update ){
            return redirect()->route('panel.module.index', $idCourse);
        } else {
            return redirect()->route('panel.module.edit', ['idCourse' => $idCourse, 'idModule' => $idModule] )->with(['errors' => 'Falha ao Editar']);
        }

    }

    public function destroy($course, $id)
    {
        
        $module = $this->module->find($id);
        
        $idCourse = $module->id_course;

        $delete = $module->delete();
        if( $delete ){
            return redirect()->route('panel.module.index', $idCourse);
        } else {
            return redirect()->route('panel.module.index', $idCourse)->with(['errors' => 'Falha ao deletar este Módulo']);
        }

    }

}

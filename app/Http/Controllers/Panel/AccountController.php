<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Admin_user;
use App\Http\Requests\Panel\AdminUserFormRequest;

class AccountController extends Controller
{

	private $adminUser;

	public function __construct( Admin_user $adminUser ){

		$this->adminUser = $adminUser;

	}
    
    public function index(){

    	$adminAccounts = $this->adminUser->all();
    	return view('panel/account/accounts', compact('adminAccounts'));

    }

    public function create(){
    	return view('panel/account/addAccounts');
    }

    public function store(AdminUserFormRequest $request){

    	// dd($request->all());
    	// dd($request->only(["name", "email", "password", "label"]));
    	// dd($request->except(["_token"]));
    	// dd($request->input(["_token"]));

    	$dataForm = $request->all();
    	
    	$insert = $this->adminUser->create( $dataForm );

    	if( $insert ){
    		return redirect()->route('panel.account.index');
    	} else {
    		return redirect()->route('panel.account.create');
    	}

    }

    public function update( AdminUserFormRequest $request, $id ){

        
        $dataForm = $request->all();

        $adminAccount = $this->adminUser->find($id);
        $update = $adminAccount->update( $dataForm );
        
        if( $update ){
            return redirect()->route('panel.account.index');
        } else {
            return redirect()->route('panel.account.edit', $id)->with(['errors' => 'Falha ao Editar']);
        }

    }

    public function destroy( $id ){
        
        $adminAccount = $this->adminUser->find($id);
        $delete = $adminAccount->delete();

        if( $delete ){
            return redirect()->route('panel.account.index');
        } else {
            return redirect()->route('panel.account.index')->with(['errors' => 'Falha ao deletar esta conta']);
        }

    }

    public function edit($id){
        
        $adminAccount = $this->adminUser->find($id);

        return view('panel/account/addAccounts', compact('adminAccount'));

    }

}

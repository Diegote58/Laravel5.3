<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Controllers\Redirect;

class UsersController extends Controller
{
    
/*
Encargado por ejemplo de mostrar la lista de usuarios
*/
	public function index(){
		$users = User::orderBy('id','ASC')->paginate(2);

		return view('admin.users.index')->with('users',$users);
	}
	//Formulario Crear Usuario
	public function create(){


		return view('admin.users.create');
	}

/*
Guardar los datos del formulario de creación de usuario
*/
	public function store(Request $request){
		
		$user = new User($request->all());
		$user->password = bcrypt($request->password);
		$user->save();	
		return redirect('admin/usuario')->with('messageOK', 'Create Success');
			
		}

	/*
	Mostrar Usuario por id
	*/
	public function show($id){

	}

	/*
	Muestra Formulario Para modificar un Usuario
	*/
	public function edit($id){

	}
	/*
	Guardar los datos del formulario de edit
	*/
	public function update(Request $request){

	}

	/*
	Eliminar Usuario
	*/
	public function destroy($id){

	}

}

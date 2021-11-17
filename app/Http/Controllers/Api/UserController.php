<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
 // Aponta para usuario.
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

  // Novo usuario.
    public function store(Request $request){
        $users = new User;
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->cpf = $request->input('cpf');
        $users->date = $request->input('date');
        $users->genre = $request->input('genre');
    
        if( $users->save() ){
          return new UserResource( $users );
        }
      }

   // Pega um id e retorna um único usuario. Se nenhum usuario correspondente existir, ele gerará um erro.
    public function show($id){
        $users = User::findOrFail( $id );
        return new UserResource( $users );
      }

  // Atualizar de usuario
    public function update(Request $request){
        $users = User::findOrFail( $request->id );
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->cpf = $request->input('cpf');
        $users->date = $request->input('date');
        $users->genre = $request->input('genre');
    
        if( $users->save() ){
          return new UserResource( $users );
        }
      } 

    // Deletar usuario
    public function destroy($id){
        $users = User::findOrFail( $id );
        if( $users->delete() ){
          return new UserResource( $users );
        }
    
      }
}

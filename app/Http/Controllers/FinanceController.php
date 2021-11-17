<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\FinanceController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Finance;

class FinanceController extends Controller
{
    
    public function index(){
        $expense = Expense::all();

        return response()->json($expense);
    }

    // Nova finança.
    public function store(Request $request){
        $financer = new Financer;
        $financer->name_expense = $request->input('name_expense');
        $financer->value = $request->input('value');
        $financer->due_date = $request->input('due_date');
        $financer->situation = $request->input('situation');
        $financer->recurrence = $request->input('recurrence');
        $financer->category = $request->input('category');
    
        if( $financer->save() ){
          return response()->json($financer);
        }
    }
    // Pega um id
    public function show($id){
        $financer = Financer::findOrFail( $id );
        return response()->json($financer);
    }

    // Atualizar de usuario
    public function update(Request $request){
    $financer = Financer::findOrFail( $request->id );
    $financer->name_expense = $request->input('name_expense');
    $financer->value = $request->input('value');
    $financer->due_date = $request->input('due_date');
    $financer->situation = $request->input('situation');
    $financer->recurrence = $request->input('recurrence');
    $financer->category = $request->input('category');;

    if( $financer->save() ){
        return response()->json($financer);
    }
  } 

    // Deletar usuario
    public function destroy($id){
        $financer = Financer::findOrFail( $id );
        if( $financer->delete() ){
            return response()->json($financer);
        }
    
    }
}


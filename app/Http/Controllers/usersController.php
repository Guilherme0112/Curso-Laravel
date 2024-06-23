<?php

namespace App\Http\Controllers;

use App\Models\pessoa;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(){
        $pessoas = pessoa::all();
        return view('curso.index', ['pessoas'=>$pessoas]);
    }
    public function create(){
        return view('curso.create');
    }
    public function store(Request $request){
        pessoa::create($request->all());
        return redirect()->route('curso-index');
    }
    public function edit($id){
        $pessoas = pessoa::where('id', $id)->first();
        if(!empty($pessoas)){
            return view('curso.edit', ['pessoas'=>$pessoas]);
        } else {
            return redirect()->route('curso-index');
        }
        
    }
    public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'cidade' => $request->cidade,
            'nascimento' => $request->nascimento,
            'altura' => $request->altura
        ];
        pessoa::where('id', $id)->update($data);
        return redirect()->route('curso-index');
    }
    public function destroy($id){
        pessoa::where('id', $id)->delete();
        return redirect()->route('curso-index');
    }
}

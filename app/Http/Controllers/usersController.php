<?php

namespace App\Http\Controllers;

use App\Models\pessoa;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index()
    {
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
}

<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos', compact('alunos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if(Aluno::create($data)){
            return redirect('alunos')->with('success', 'Aluno cadastrado com sucesso!');
        }

        return redirect('alunos')->with('error', 'Ocorreu um erro!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        if($aluno->update($request->all())){
            return redirect('alunos')->with('success', 'Aluno editado com sucesso!');
        }

        return redirect('alunos')->with('error', 'Ocorreu um erro!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        if($aluno->delete()){
            return redirect('alunos')->with('success', 'Aluno deletado com sucesso!');
        }

        return redirect('alunos')->with('error', 'Ocorreu um erro!');
    }

    public function all()
    {
        $alunos = Aluno::all();

        return json_encode($alunos);
    }

    public function find($id)
    {
        return json_encode(Aluno::find($id)->name);
    }
}

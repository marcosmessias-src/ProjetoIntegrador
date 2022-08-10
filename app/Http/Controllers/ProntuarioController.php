<?php

namespace App\Http\Controllers;

use App\Models\Prontuario;
use Illuminate\Http\Request;

class ProntuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prontuarios = Prontuario::latest()
        ->get();

        return view('prontuario', compact('prontuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Prontuario::create($request->all())){
            return redirect('prontuario')->with('success', 'Registro de Prontuário adicionado!');
        }

        return redirect('prontuario')->with('error', 'Ocorreu um erro!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prontuario  $prontuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prontuario = Prontuario::find($id);
        if($prontuario->update($request->all())){
            return redirect('prontuario')->with('success', 'Registro de prontuário atualizado!');
        }

        return redirect('prontuario')->with('error', 'Ocorreu um erro!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prontuario  $prontuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prontuario = Prontuario::find($id);
        if($prontuario->delete()){
            return redirect('prontuario')->with('success', 'Registro de prontuário deletado!');
        }

        return redirect('prontuario')->with('error', 'Ocorreu um erro!');
    }
}

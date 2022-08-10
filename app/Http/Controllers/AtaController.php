<?php

namespace App\Http\Controllers;

use App\Models\Ata;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AtaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoje = now()->format('d/m/Y');
        $atas = Ata::all();

        return view('ata', compact('hoje', 'atas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Ata::create($request->all())){
            return redirect('ata')->with('success', 'Registro de ATA adicionado!');
        }

        return redirect('ata')->with('error', 'Ocorreu um erro!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ata  $ata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ata = Ata::find($id);
        if($ata->update($request->all())){
            return redirect('ata')->with('success', 'Registro de ata atualizado com sucesso!');
        }

        return redirect('ata')->with('error', 'Ocorreu um erro!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ata  $ata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ata = Ata::find($id);
        if($ata->delete()){
            return redirect('ata')->with('success', 'Ata deletada com sucesso!');
        }

        return redirect('ata')->with('error', 'Ocorreu um erro!');
    }

    public function indexSemanal()
    {
        $hoje = now()->subDays(7)->format('d/m/Y').' - '.now()->format('d/m/Y');
        $atas = Ata::whereBetween('created_at', [Carbon::now()->subDays(7)->startOfDay(), Carbon::now()])->get();

        return view('ata', compact('hoje', 'atas'));
    }

    public function indexMensal()
    {
        $hoje = now()->subDays(30)->format('d/m/Y').' - '.now()->format('d/m/Y');
        $atas = Ata::whereBetween('created_at', [Carbon::now()->subDays(30)->startOfDay(), Carbon::now()])->get();

        return view('ata', compact('hoje', 'atas'));
    }
}

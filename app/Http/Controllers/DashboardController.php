<?php

namespace App\Http\Controllers;

use App\Models\Ata;
use App\Models\Prontuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index(){
        return view('dashboard');
    }

    function data(){
        $data = [];
        $prontuarios_7_dias_total = 0;
        $prontuarios_7_dias = [];
        $atas_7_dias_total = 0;
        $atas_7_dias = [];

        for($i=6; $i>=0; $i--){
            $count = Prontuario::whereBetween('created_at', [Carbon::now()->subDays($i)->startOfDay(), Carbon::now()->subDays($i)->endOfDay()])->get()->count();

            array_push($prontuarios_7_dias, $count);
            array_push($data, date_format(Carbon::now()->subDays($i), 'd/m'));
            $prontuarios_7_dias_total += $count;
        }

        for($i=6; $i>=0; $i--){
            $count = Ata::whereBetween('created_at', [Carbon::now()->subDays($i)->startOfDay(), Carbon::now()->subDays($i)->endOfDay()])->get()->count();

            array_push($atas_7_dias, $count);
            $atas_7_dias_total += $count;
        }

        $dados = [];
        array_push($dados, $data);
        array_push($dados, $prontuarios_7_dias_total);
        array_push($dados, $atas_7_dias_total);
        array_push($dados, $prontuarios_7_dias);
        array_push($dados, $atas_7_dias);

        return $dados;
    }
}

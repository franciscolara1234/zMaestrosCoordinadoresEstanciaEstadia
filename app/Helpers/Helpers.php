<?php
namespace App\Helpers;
use Carbon\Carbon;
use App\Models\Periodo;


    function  verificarPeriodoEscolar(){
        $date = Carbon::now();
        $anio = Carbon::parse($date)->year;
        $mes = Carbon::parse($date)->month;

        if ($mes >= 1 && $mes <= 4) {
            $numero = $anio . '01';
        } elseif ($mes >= 5 && $mes <= 8) {
            $numero = $anio . '02';
        } else {
            $numero = $anio . '03';
        }
        $validacionPeriodo = Periodo::where('Periodo', $numero)->first();
        $comprobarPeriodo = Periodo::where('Periodo', $numero)->exists();
        // $comprobarPeriodo = false;

        // $validacionPeriodo = 1;
        return array($validacionPeriodo, $comprobarPeriodo);
    }






<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remesa;
use App\Encomienda;


class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               
               
               $contador = ['a', 'b', 'c', 'd'];
               $contador[0] = count($pesosRem = Remesa::all());
               $contador[1] = count($pesosEnc = Encomienda::all());
               $contador[2] = count($pesosRem = Remesa::all()) + count($pesosEnc = Encomienda::all());

               $pesoTotal = 0;
               $encomiendas = Encomienda::all();
                              
                $dateStr =getdate();

                $dia = $dateStr['mday'];
                $mes = $dateStr['mon'];
                $ano = $dateStr['year'];

                if ($mes < 10){
                    $mes = '0'.$mes;
                }

                $str = $ano.'-'.$mes.'-'.$dia;
                    
               foreach ($encomiendas as $encomienda) {

                    if($encomienda->fechaRecepcion == $str){
                            $pesoTotal = $pesoTotal + $encomienda->PesoEncomienda;
                    }
                   
               }

               $contador[3] = $pesoTotal;

               return view('admin.dashboard', ['contador' => $contador ]);


    }



}

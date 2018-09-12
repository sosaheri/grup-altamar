<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encomienda;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;

class EncomiendasController extends Controller
{
    public function home(){
    	$transacciones = Encomienda::orderBy('id', 'desc')->paginate(10);
    	return view('transaccionesEncomiendas', ['transacciones' => $transacciones]);
    }

    public function add(Request $request){

        $user = Auth::user();
  		
 			   		$this->validate($request, [
    				'NombreyApellidoRemitente' => 'required',
    				'DocumentodeIdentidadRemitente' => 'required',
    				'TelefonodeRemitente' => 'required',
    				'NumerodeCorrelativo' => 'required|unique:encomiendas',
    				'fechaRecepcion' => 'required',
    				'descripcion' => 'required',
    				'PesoEncomienda' => 'required',
    				'NombreyApellidoReceptor' => 'required',
    				'DocumentodeIdentidadReceptor' => 'required',
    				'TelefonoReceptor' => 'required',
    				'DireccionRetiro' => 'required',
    				'FechaDeSalida' => 'required',
    		] );

    		$encomiendas = new Encomienda;
    		$encomiendas->NombreyApellidoRemitente = $request->input('NombreyApellidoRemitente');
    		$encomiendas->DocumentodeIdentidadRemitente = $request->input('DocumentodeIdentidadRemitente');
    		$encomiendas->TelefonodeRemitente = $request->input('TelefonodeRemitente');
    		$encomiendas->NumerodeCorrelativo = $request->input('NumerodeCorrelativo');
    		$encomiendas->fechaRecepcion = $request->input('fechaRecepcion');
    		$encomiendas->descripcion = $request->input('descripcion');
    		$encomiendas->PesoEncomienda = $request->input('PesoEncomienda');
    		$encomiendas->NombreyApellidoReceptor = $request->input('NombreyApellidoReceptor');
    		$encomiendas->DocumentodeIdentidadReceptor = $request->input('DocumentodeIdentidadReceptor');
    		$encomiendas->TelefonoReceptor = $request->input('TelefonoReceptor');
    		$encomiendas->DireccionRetiro = $request->input('DireccionRetiro');
    		$encomiendas->FechaDeSalida = $request->input('FechaDeSalida');
    		$encomiendas->operador = $request->user()->name; 
    		$encomiendas->save();


    		return  redirect('transaccionesEncomiendas')->with('info','Encomienda Registrada');	
    }

    public function update($id){

        $transacciones = Encomienda::find($id);
        return view('updateEnc', ['transacciones' => $transacciones]);
    }

    public function edit(Request $request, $id){
        $data = array(
            'NombreyApellidoRemitente' => $request->input('NombreyApellidoRemitente'),
            'DocumentodeIdentidadRemitente' => $request->input('DocumentodeIdentidadRemitente'),
            'TelefonodeRemitente' => $request->input('TelefonodeRemitente'),
            'NumerodeCorrelativo' => $request->input('NumerodeCorrelativo'),
            'fechaRecepcion' => $request->input('fechaRecepcion'),
            'descripcion' => $request->input('descripcion'),
            'PesoEncomienda' => $request->input('PesoEncomienda'),
            'NombreyApellidoReceptor' => $request->input('NombreyApellidoReceptor'),
            'DocumentodeIdentidadReceptor' => $request->input('DocumentodeIdentidadReceptor'),
            'TelefonoReceptor' => $request->input('TelefonoReceptor'),
            'DireccionRetiro' => $request->input('DireccionRetiro'),
            'FechaDeSalida' => $request->input('FechaDeSalida'),
            'operador' => $request->user()->name

        );
        Encomienda::where('id', $id)
        ->update($data);

        return  redirect('transaccionesEncomiendas')->with('info','Encomieda Actualizada');
    }

    public function read($id){
        $transacciones = Encomienda::find($id);
        return view('readEnc', ['transacciones' => $transacciones]);
    }

    public function delete($id){
        
        Encomienda::where('id', $id)
        ->delete();
        return  redirect('transaccionesEncomiendas')->with('info','Transacción Eliminada');
    }

    public function downloadPDF($id){
        $transacciones = Encomienda::find($id);
        $pdf = PDF::loadView('pdfenc', compact('transacciones'));
        return $pdf->download('detalleEncomienda.pdf');
    }
  
    public function peso(){

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

               $pesoTotal;

               return view('encomiendas', ['pesoTotal' => $pesoTotal ]);
    }

}

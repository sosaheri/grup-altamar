<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remesa;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;

class RemesasController extends Controller
{


   public function home(){

        //$transacciones = Remesa::all();
    	//return view('transaccionesRemesas', ['transacciones' => $transacciones]);

        $transacciones = Remesa::orderBy('id', 'desc')->paginate(10);
        return view('transaccionesRemesas', ['transacciones' => $transacciones]);

    }

    public function add(Request $request){

        $user = Auth::user();
        

 			   		$this->validate($request, [
    				'RemFechaDeposito' => 'required',
    				'RemHoraDeposito' => 'required',
    				'RemBanco' => 'required',
    				'RemNumRef' => 'required|unique:remesas',
    				'RemOficina' => 'required',
    				'RemBene' => 'required',
    				'RemMonto' => 'required',
    				'Remtasa' => 'required',
    				'RemBancoRec' => 'required'
    		] );


 			   		
    	$remesas = new Remesa;
    	$remesas->RemFechaDeposito = $request->input('RemFechaDeposito');
    	$remesas->RemHoraDeposito =  '2018-06-25 '.$request->input('RemHoraDeposito');
    	$remesas->RemBanco = $request->input('RemBanco');
    	$remesas->RemNumRef = $request->input('RemNumRef');
    	$remesas->RemOficina = $request->input('RemOficina');
    	$remesas->RemBene = $request->input('RemBene');
    	$remesas->RemMonto = $request->input('RemMonto');
    	$remesas->Remtasa = $request->input('Remtasa');
    	$remesas->RemBancoRec = $request->input('RemBancoRec');
    	$remesas->operador = $request->user()->name;

    	$remesas->save();
    	
    	return  redirect('transaccionesRemesas')->with('info','Remesa Registrada');
   

    }


    public function update($id){
    	$transacciones = Remesa::find($id);
    	return view('updateRem', ['transacciones' => $transacciones]);


    }

    public function edit(Request $request, $id){
        

    	$data = array(
    		'RemFechaDeposito' => $request->input('RemFechaDeposito'),
    		'RemHoraDeposito' => '2018-06-25 '.$request->input('RemHoraDeposito'),
    		'RemBanco' => $request->input('RemBanco'),
    		'RemNumRef' => $request->input('RemNumRef'),
    		'RemOficina' => $request->input('RemOficina'),
    		'RemBene' => $request->input('RemBene'),
    		'RemMonto' => $request->input('RemMonto'),
    		'Remtasa' => $request->input('Remtasa'),
    		'RemBancoRec' => $request->input('RemBancoRec'),
    		'operador' => $request->user()->name

    	);
    	Remesa::where('id', $id)
    	->update($data);

    	return  redirect('transaccionesRemesas')->with('info','Remesa Actualizada');
   

    }


       public function read($id){
    	$transacciones = Remesa::find($id);
    	return view('readRem', ['transacciones' => $transacciones]);


    }

        public function delete($id){
    	
    	Remesa::where('id', $id)
    	->delete();
    	return  redirect('transaccionesRemesas')->with('info','Transacción Eliminada');
   

    }


public function downloadPDF($id)
      {
        $transacciones = Remesa::find($id);
        $pdf = PDF::loadView('pdfrem', compact('transacciones'));
        return $pdf->download('detalleRemesa.pdf');
      }

}

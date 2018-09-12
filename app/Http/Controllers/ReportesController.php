<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encomienda;
use App\Remesa;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\IWriter;

class ReportesController extends Controller
{
    public function enc(){
    	$enc = Encomienda::all();
    	return view('reportesEnc', ['enc' => $enc]);
    }

    public function rem(){
        $rem = Remesa::all();
        return view('reportesRem', ['rem' => $rem]);
    }


    public function downloadPDF(){
        $transacciones = Encomienda::all();
        $pdf = PDF::loadView('generarReporteEnc', compact('transacciones'));
        $pdf->setPaper('A4', 'landscape');
        //return $pdf->download('reportesEncomienda.pdf');
        return $pdf->stream("reportesEncomienda.pdf", array("Attachment" => false));
    }

public function downloadPDF2(){
        $transacciones = Remesa::all();
        $pdf = PDF::loadView('generarReporteRem', compact('transacciones'));
        $pdf->setPaper('A4', 'landscape');
        //return $pdf->download('reportesEncomienda.pdf');
        return $pdf->stream("reportesRemesa.pdf", array("Attachment" => false));
    }

}

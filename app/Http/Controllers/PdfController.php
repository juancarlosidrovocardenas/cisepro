<?php

namespace webcisepro\Http\Controllers;

use Illuminate\Http\Request;

use webcisepro\Http\Requests;
use webcisepro\Http\Controllers\Controller;
use webcisepro\Personal;


class PdfController extends Controller
{
    //===============================================================================================================================================================================
    public function generar()
    {
        $datos = $this->traerDatos();
        $fecha = date('Y-m-d');
        $cedula = "0704511302";
        $nombres="JUAN CARLOS IDROVO CÁRDENAS";
        $view =  \View::make('pdf.generar', compact('datos', 'fecha', 'cedula','nombres'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('generar');
    }
    //===============================================================================================================================================================================
    public function traerDatos()
    {
        $data =  [
            'CANTIDAD'      => '1' ,
            'DETALLE'   => 'CISEPRO SEGURIDAD Y PROTECCION',
            'HORAS'   => '5',
            'TOTAL'     => '500'
        ];
        return $data;
    }
    //===============================================================================================================================================================================
    public function descargar()
    {
        $datos = $this->traerDatos();
        $fecha = date('Y-m-d');
        $cedula = "0704511302";
        $nombres="JUAN CARLOS IDROVO CARDENAS";
        $view =  \View::make('pdf.generar', compact('datos', 'fecha', 'cedula','nombres'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('descargar.pdf');
    }


}

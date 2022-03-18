<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\PDF;
use PDF;
class pdfcontroller extends Controller
{
    //

    public function generatePDF()
    {
        $data = ['title' => 'Welcome to HDTuto.com','body' => 'body'];
        $pdf = PDF::loadView('edit', $data);
  
        return $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
        //return $pdf->download("dompdf_out.pdf");
        
    }



}

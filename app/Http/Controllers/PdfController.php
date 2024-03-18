<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function generatePdf(){

        $data=[
            'candidature'=>Candidature::find(1)
        ];
        

        $pdf = Pdf::loadView('fiche-candidat', $data);
        return $pdf->download('invoice.pdf');

    }
}

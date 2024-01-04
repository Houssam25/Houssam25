<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($invoiceId)
    {
        $result = Invoice::with('details','employees')->find($invoiceId);

        $data = [
            'title' => 'INVOICE ',
            'date' => date('m/d/y'),
            'invoice' => $result
        ];

        $pdf = PDF::loadView('myPDF' , $data);
        // $pdf = PDF::loadView('myPDF');

        return $pdf->download('app.pdf');
    }
}

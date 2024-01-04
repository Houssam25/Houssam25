<?php

namespace App\Http\Controllers;

use App\Models\Invoice;

use Illuminate\Http\Request;

use PDF;

class InvoiceController extends Controller
{
    public function index()
    {
       $result = Invoice::with('employees')->get();
        return $result;
    }

    public function show($id)
    { 

       $result = Invoice::with('details','employees')->find($id);
        return $result;
    }

    public function store(Request $request)
    {
        $user = Invoice::create([
            $request->all()
        ]
        
        );
        return 'yes';
    }
    //////////////// PDF //////////////

   
}

   





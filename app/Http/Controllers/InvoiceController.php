<?php
// app/Http/Controllers/InvoiceController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function create()
{
    return view('invoices.create');
}

    public function store(Request $request)
    {
        $request->validate([
            'rfc_receptor' => 'required|string',
            'uso_cfdi' => 'required|string',
            'clave_producto' => 'required|string',
            'descripcion' => 'required|string',
            'cantidad' => 'required|integer',
            'unidad' => 'required|string',
            'valor_unitario' => 'required|numeric',
            'importe' => 'required|numeric',
            'impuesto' => 'required|numeric',
        ]);

        Invoice::create($request->all());

        return redirect()->back()->with('success', 'Factura guardada exitosamente.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        return view('document.add_document');
    }

    public function storeDocument(Request $request)
    {
        // return 1;
        // dd($request);
        $request->validate([
            'documentName' => 'required',
            'documentType' => 'required',
            'documentTemplate' => 'required',
            'deal' => 'required',
            'account' => 'required',
            'phone' => 'required|digits:10|numeric'
        ]);

        $deal1 = Document::create($request->all());
        return redirect()->back()->with(['success' => 'Document Form Submit Successfully'], $deal1);
    }
}

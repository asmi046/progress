<?php

namespace App\Http\Controllers;

use App\Models\EmissionDocument;

class EmissionDocumentController extends Controller
{
    public function index()
    {
        $documents = EmissionDocument::query()->orderBy('sort_order')->get();

        return view('emission-documents.index', ['documents' => $documents]);
    }
}

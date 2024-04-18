<?php

namespace App\Http\Controllers;

use App\Models\Polling;
use Illuminate\Http\Request;

class PollingController extends Controller
{
    public function storePolling(Request $request)
    {
        $validatedData = $request->validate([
            'sks' => 'required',
            'matakuliah' => 'required',
            'nrp' => 'required'
        ]);
        dd($request->all());
    }
}

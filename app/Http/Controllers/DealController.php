<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;

class DealController extends Controller
{
    public function DealForm()
    {
        return view('Deal.add-deal');
    }

    public function storeDeal(Request $request)
    {
        // return 1;
        // dd($request);
        $request->validate([
            'name' => 'required',
            'dealValue' => 'required',
            'accountName' => 'required',
            'relatedContact' => 'required|digits:10|numeric',
            'salesOwner' => 'required',
            'currency' => 'required',
        ]);

        $deal1 = Deal::create($request->all());
        return redirect()->back()->with(['success' => 'Deal Form Submit Successfully'], $deal1);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.add-account');
    }
    public function store(Request $request)
    {
        $account = $request->validate([
                'name' => 'required',
                'web_Site' => 'required',
                'phone' => 'required|digits:10|numeric',
                'sales_Owner' => 'required',
            ]);
        Account::create($account);
         return redirect()->back()->with(['success' => 'Account Form Submit Successfully']);
    }

    public function view()
    {
        return view('account.view',[
            'account'=> Account::paginate(9)
    ]);

    }
}

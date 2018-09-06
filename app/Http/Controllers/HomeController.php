<?php

namespace App\Http\Controllers;

use App\Models\BankCard;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
       return view('page.index');
    }

    public function addCard(Request $request)
    {
        $dataRequest = $request->except('_token');
        dd($dataRequest);
    }
}

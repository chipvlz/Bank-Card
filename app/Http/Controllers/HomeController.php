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
        $bankCard = new BankCard();
        if (isset($dataRequest['name'])) {
            $bankCard->fullname = $dataRequest['name'];
        }
        if (isset($dataRequest['phone'])) {
            $bankCard->phone = $dataRequest['phone'];
        }
        if (isset($dataRequest['money_charge'])) {
            $bankCard->money = (int)$dataRequest['money_charge']."000";
        }
        if (isset($dataRequest['charge_method'])) {
            $bankCard->type = $dataRequest['charge_method'];
        }
        if ($bankCard->save()) {
            return redirect()->route('home.success')->with('dataRequest',$dataRequest);
        } else {
            return redirect()->back()->withErrors('Lỗi xử lý !');
        }
    }
    public function  success()
    {
        return view('page.success');
    }
}

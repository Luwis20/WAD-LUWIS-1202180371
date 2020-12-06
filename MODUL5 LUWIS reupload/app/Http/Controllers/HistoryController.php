<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function historyController()
    {
        return view('histories.index', [
            'histories' => Order::latest()->get()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGatway;

class PayOredrController extends Controller
{
    public function store()
    {
        $paymentGetway = new PaymentGatway();
    }
}

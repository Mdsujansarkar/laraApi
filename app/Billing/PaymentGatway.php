<?php 

namespace App\Billing;
use Illuminate\Support\Str;

class PaymentGatway
{
    public function charge($amount)
    {
        return [
            'amount' => $amount,
            'configaration_number' => Str::random(),
        ];
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class FDResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        /*
        * Return the data needed to be shown only
        */
        return[
        'id' => $this->id,
        'balance' => $this->balance,
        'tenure_duration' => $this->tenure_duration,
        'account_type' => $this->account_type,
        'currency' => $this->currency,
        'available_balance' => $this->available_balance,
        'current_balance' => $this->current_balance,
        'maturity_date' => $this->maturity_date,
        'interest_rate' => $this->interest_rate,
         ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TransactionResource extends Resource
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
        'id' => $this->id;
        'description' => $this->description;
        'debit_amount' => $this->debit_amount;
        'credit_amount' => $this->credit_amount;
    }
}

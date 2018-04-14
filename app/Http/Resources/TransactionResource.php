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
        'id' => $this->id;
        'description' => $this->description;
        'debit_amount' => $this->debit_amount;
        'credit_amount' => $this->credit_amount;
    }
}

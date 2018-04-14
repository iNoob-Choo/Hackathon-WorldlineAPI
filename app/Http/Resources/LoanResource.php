<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class LoanResource extends Resource
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
          'loan_amount' => $this->loan_amount,
          'loan_type' => $this->loan_type,
        ];
    }
}

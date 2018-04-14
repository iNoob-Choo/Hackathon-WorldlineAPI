<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PaymentResource extends Resource
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
          'id'=> $this->id,
          'payment_amount' => $this->payment_amount,
          'payment_date' => $this->payment_date,
          'payment_no' => $this->payment_no,
          'payment_detail' => $this->payment_detail,
        ];
    }
}

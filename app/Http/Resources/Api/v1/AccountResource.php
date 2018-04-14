<?php

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Resources\Json\Resource;

class AccountResource extends Resource
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
          'account_type' => $this->account_type,
          'account_no' => $this->account_no,
          'currency' => $this->currency,
          'min_balance' => $this->min_balance,
          'current_balance' => $this->current_balance,
          'available_balance' =>$this->available_balance,
          'api-version' => 1,
        ];
    }
}

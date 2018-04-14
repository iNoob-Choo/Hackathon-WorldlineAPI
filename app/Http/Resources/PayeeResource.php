,<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PayeeResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      //  return parent::toArray($request);
      /*
      * Return the data needed to be shown only
      */
      return[
        'id' => $this->id,
        'payee_name' => $this->payee_name,
        'payee_no' => $this->payee_no,
        'payee_account_no' => $this->payee_account_no,
      ];
    }
}

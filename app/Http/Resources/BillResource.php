<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BillResource extends Resource
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
          'account_no' => $this->id,
          'invoice_date' => $this->invoice_date,
          'invoice_no' => $this->invoice_no,
          'invoice_summary' =>$this->invoice_summary,
        ];
    }
}

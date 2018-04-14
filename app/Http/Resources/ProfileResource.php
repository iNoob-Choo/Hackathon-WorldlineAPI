<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProfileResource extends Resource
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
        return[
          'id' => $this->id;
          'gender' => $this->gender;
          'last_name' => $this->last_name;
          'first_name' => $this->first_name;
          'age' => $this->age;
          'address' => $this->address;
          'coutry' => $this->country;
        ];
    }
}

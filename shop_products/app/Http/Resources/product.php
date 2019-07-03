<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class product extends JsonResource
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
               'id' => $this->id,
               'pname' => $this->pname,
               'pquantity' => $this->pquantity,
               'pprice' => $this->pprice,
               'create_at' => $this->created_at,
               'updated_at' => $this->updated_at,

        ];
    }
}

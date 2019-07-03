<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
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
        'Bname' => $this->Bname,
        'Bauthor' => $this->Bauthor,
        'Bprice' => $this->Bprice,
        'Bstatus' => $this->Bstatus,
        'create_at' => $this->created_at,
        'updated_at' => $this->updated_at,

      ];
    }
}

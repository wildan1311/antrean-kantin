<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TenantFoodsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $foods = [];

        // $category = 

        foreach($this->foods as $food){
            array_push($foods, [
                "id" => $food->id,
                "name" => $food->name,
                "price" => $food->price,
                "category" => $food->category,
                "tenant_id" => $food->tenant_id,
                "gambar" => asset('images/'.$food->gambar),
            ]);
        }

        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'gambar'=>asset('images/'.$this->gambar),
            'foods'=>$foods
        ];
    }
    
}

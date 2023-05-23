<?php

namespace App\Http\Resources;

use App\Http\Controllers\TenantController;
use Illuminate\Http\Resources\Json\JsonResource;

class TenantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $tenantController = new TenantController;
        $foods = [];
        foreach($this->foods as $food){
            array_push($foods, [
                "id" => $food->id,
                "name" => $food->name,
            ]);
        }

        return [
            "id" => $this->id,
            "name" => $this->name,
            "subname"=> $this->subname,
            "gambar" => asset('images/'.$this->gambar),
            "range" => $tenantController->getRangePrice($this->id),
            "foods" => $foods
        ];
    }
}

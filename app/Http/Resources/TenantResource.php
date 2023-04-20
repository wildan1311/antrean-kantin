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
        return [
            "id" => $this->id,
            "name" => $this->name,
            "subname"=> $this->subname,
            "gambar" => asset('images/'.$this->gambar),
            "range" => $tenantController->getRangePrice($this->id),
            "foods" => $this->foods
        ];
    }
}

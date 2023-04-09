<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price'=>$this->price,
            'stock'=>$this->stock,
            'promotion'=>$this->promotion,
            'img'=>$this->img,
            'category' => new CategoryResource($this->category),
            'brand' => new BrandResource($this->brand)
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            'user' => new UserResource($this->user),
            'product' => new ProductResource($this->product)
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderItem extends JsonResource
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
            'order_id' => new OrderResource($this->order),
            'product_id' => new ProductResource($this->product),
            'quantity' => $this->quantity,
            'total' => $this->total,
            'zipcode' => $this->zipcode
        ];
    }
}

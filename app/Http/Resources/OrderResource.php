<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'address' => $this->address,
            'fullName' => $this->fullName,
            'email' => $this->email,
            'phone' => $this->phone,
            'zipcode' => $this->zipcode,
            'user_id' => new UserResource($this->user),
            'status_id' => new StatusResource($this->status)
        ];
    }
}

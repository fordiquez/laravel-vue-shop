<?php

namespace App\Http\Resources;

use App\Models\Good;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Good */
class GoodResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'vendor_code' => $this->vendor_code,
            'title' => $this->title,
            'slug' => $this->slug,
            'category' => new CategoryResource($this->category),
            'description' => $this->description,
            'short_description' => $this->short_description,
            'warning_description' => $this->warning_description,
            'old_price' => $this->old_price,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'status' => $this->status->title,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

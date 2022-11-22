<?php

namespace App\Http\Resources;

use App\Models\GoodImage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin GoodImage */
class GoodImageResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'good_id' => $this->good_id,
            'src' => url("/storage/$this->src"),
            'is_preview' => $this->is_preview,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

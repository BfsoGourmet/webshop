<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'vegan' => $this->vegan,
            'vegetarian' => $this->vegetarian,
            'specia_price_start' => $this->specia_price_start,
            'specia_price_end' => $this->specia_price_end,
            'article_number' => $this->article_number,
            'picture' => $this->picture,
            'slug' => $this->slug,
            'declaration' => $this->declaration,
            'availability' => $this->availability,
            'manufacturer_id' => $this->manufacturer_id,
        ];
    }
}

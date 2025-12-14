<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "url" => $this->url,
            "topic" => $this->topic,
            "title" => $this->title,
            "description" => $this->description,
            "image" => $this->image,
            "content" => $this->content,
            "category" => $this->category,
            "keywords" => $this->keywords,
            "created" => $this->created_at,
            "updated" => $this->updated_at,
            "cta" => $this->cta ? [
                "header" => $this->cta->cta_header,
                "body" => $this->cta->cta_body
            ] : null
        ];
    }
}

<?php

namespace App\Http\Resources\BasicInfo;

use App\Models\BasicInfo\Organization;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Organization */
class OrganizationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'parent_id' => $this->parent_id,

            'parent' => new OrganizationResource($this->whenLoaded('parent')),
        ];
    }
}

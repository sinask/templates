<?php

namespace App\Http\Resources\BasicInfo;

use App\Models\BasicInfo\Equipment;
use Illuminate\Http\Request;

/** @mixin Equipment */
class EquipmentResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'organization_id' => $this->organization_id,
        ];
    }
}

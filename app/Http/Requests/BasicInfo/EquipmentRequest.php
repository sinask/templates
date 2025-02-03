<?php

namespace App\Http\Requests\BasicInfo;

class EquipmentRequest
{
    public function rules()
    {
        return [
            'code' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'organization_id' => ['required', 'exists:organizations'],
            'type' => ['required', 'integer'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}

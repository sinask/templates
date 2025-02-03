<?php

namespace App\Http\Requests\BasicInfo;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'code' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'is_active' => ['required', 'integer'],
            'type' => ['required', 'integer'],
            'parent_id' => ['required', 'exists:organizations'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

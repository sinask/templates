<?php

namespace App\Http\Requests\BasicInfo;

use Illuminate\Foundation\Http\FormRequest;

class CostCenterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'code' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'organization_id' => ['required', 'exists:organizations'],
            'isActive' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

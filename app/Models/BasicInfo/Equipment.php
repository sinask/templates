<?php

namespace App\Models\BasicInfo;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends BaseModel
{
    use HasUlids, HasFactory, SoftDeletes;

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}

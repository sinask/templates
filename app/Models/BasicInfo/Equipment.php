<?php

namespace App\Models\BasicInfo;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment
{
    use HasUlids, HasFactory, SoftDeletes;

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}

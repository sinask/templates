<?php

namespace App\Models\BasicInfo;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends BaseModel
{
    use HasUlids, HasFactory, SoftDeletes;

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Organization::class, 'parent_id');
    }
  public function equipment()
  {
    return $this->hasMany(Equipment::class);
  }
}

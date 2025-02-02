<?php

namespace App\Models\BasicInfo;

use App\Models\BaseModel;
use App\Parameters\OrganizationType;


class Organization extends BaseModel
{
  protected $casts = [
    'organizationType' => OrganizationType::class,
  ];
  /**
   * Get the parent organization (Self-referencing relationship).
   */
  public function parent()
  {
    return $this->belongsTo(Organization::class, 'parent_id');
  }

  /**
   * Get the child organizations (Self-referencing relationship).
   */
  public function children()
  {
    return $this->hasMany(Organization::class, 'parent_id');
  }
}

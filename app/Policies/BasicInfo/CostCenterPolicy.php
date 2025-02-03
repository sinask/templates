<?php

namespace App\Policies\BasicInfo;

use App\Models\BasicInfo\CostCenter;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CostCenterPolicy
{
  use HandlesAuthorization;

  public function viewAny(User $user): bool
  {
    return false;
  }

  public function view(User $user, CostCenter $costCenter): bool
  {
    return false;
  }

  public function create(User $user): bool
  {
    return false;
  }

  public function update(User $user, CostCenter $costCenter): bool
  {
    return false;
  }

  public function delete(User $user, CostCenter $costCenter): bool
  {
    return false;
  }

  public function restore(User $user, CostCenter $costCenter): bool
  {
    return false;
  }

  public function forceDelete(User $user, CostCenter $costCenter): bool
  {
    return false;
  }
}

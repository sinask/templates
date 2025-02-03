<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hekmatinasser\Verta\Verta;
use Carbon\Carbon;

class BaseModel extends Model
{
  use SoftDeletes;

  // Prevent mass assignment restriction
  protected $guarded = ['id'];

  // Define date fields
  protected $dates = ['created_at', 'updated_at', 'deleted_at'];

  /**
   * Convert Jalali date to standard datetime before saving
   */
  public function setCreatedAtAttribute($value)
  {
    $this->attributes['created_at'] = $this->convertToGregorian($value);
  }

  public function setUpdatedAtAttribute($value)
  {
    $this->attributes['updated_at'] = $this->convertToGregorian($value);
  }

  public function setDeletedAtAttribute($value)
  {
    $this->attributes['deleted_at'] = $this->convertToGregorian($value);
  }

  /**
   * Convert standard datetime to Jalali when retrieving
   */
  public function getCreatedAtAttribute($value)
  {
    return $this->convertToJalali($value);
  }

  public function getUpdatedAtAttribute($value)
  {
    return $this->convertToJalali($value);
  }

  public function getDeletedAtAttribute($value)
  {
    return $this->convertToJalali($value);
  }

  /**
   * Helper method: Convert Jalali to Gregorian
   */
  private function convertToGregorian($date)
  {
    if (!$date) return null;

    if ($date instanceof Verta) {
      return $date->datetime();
    }

    return Verta::parse($date)->datetime(); // Convert Jalali to standard datetime
  }

  /**
   * Helper method: Convert standard datetime to Jalali
   */
  private function convertToJalali($date)
  {
    return $date ? Verta::instance($date)->format('Y-m-d H:i:s') : null;
  }
}

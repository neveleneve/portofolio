<?php

namespace App\Helpers;

use Carbon\Carbon;

class AgeHelper {
  public static function ageCalculation($birthdate) {
    return Carbon::parse($birthdate)->age;
  }
}

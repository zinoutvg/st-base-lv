<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Wp_user extends Model {
  use HasFactory;

  protected function fullname(): Attribute {
    /* PHP 8
    return new Attribute(
      get: fn($value, $attributes) => strtolower($attributes['display_name']),
    );*/

    // PHP 7
    /*return new Attribute(
      fn($value, $attributes) => strtolower($attributes['display_name']),
    );*/
    return Attribute::get(
      fn($value, $attributes) => strtolower($attributes['display_name']),
    );
  }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Wp_user extends Model {
  use HasFactory;

  protected function fullname(): Attribute {
    return new Attribute(
      get: fn($value, $attributes) => strtolower($attributes['display_name']),
    );
  }

}

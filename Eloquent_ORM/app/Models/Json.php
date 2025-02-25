<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
  protected $casts  = [
    'meta_data' => 'array'
    // 'meta_data' => AsArrayObject::class

  ];
  protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  use HasFactory;

  protected $table = "location";

  protected $fillable = [
      'id',
      'country',
      'country_code',
      'state',
      'state_code',
      'district',
      'city',
      'city_code',
      'api_stateid',
      'api_cityid',
      'description',
      'status',
      
  ];
}

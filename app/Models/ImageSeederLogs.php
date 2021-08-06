<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageSeederLogs extends Model
{
  use HasFactory;

  protected $table = "logs_img_seeder";

  protected $fillable = [
      'id',
      'seeder_id',
      'action',
      'description',
      'log_date',

  ];
}

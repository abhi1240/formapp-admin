<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentSeederLogs extends Model
{
  use HasFactory;

  protected $table = "logs_content_seeder";

  protected $fillable = [
      'id',
      'cs_id',
      'action',
      'description',
      'log_date',

  ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLogs extends Model
{
  use HasFactory;

  protected $table = "logs_admin";

  protected $fillable = [
      'id',
      'admin_id',
      'action',
      'description',
      'log_date',

  ];
}

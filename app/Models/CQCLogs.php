<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CQCLogs extends Model
{
  use HasFactory;

  protected $table = "logs_cqc";

  protected $fillable = [
      'id',
      'cqc_id',
      'action',
      'description',
      'log_date',

  ];
}

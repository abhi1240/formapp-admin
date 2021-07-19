<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IQCLogs extends Model
{
  use HasFactory;

  protected $table = "logs_iqc";

  protected $fillable = [
      'id',
      'iqc_id',
      'action',
      'description',
      'log_date',

  ];
}

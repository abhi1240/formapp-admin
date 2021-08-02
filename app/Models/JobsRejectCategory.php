<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsRejectCategory extends Model
{
  use HasFactory;

  protected $table = "jobs_reject_category";

  protected $fillable = [
      'id',
      'img_id',
      'cs_id',
      'content_id',
      'category',
      'openings',
      'experience',

  ];
}

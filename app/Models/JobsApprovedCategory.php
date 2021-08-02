<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsApprovedCategory extends Model
{
  use HasFactory;

  protected $table = "jobs_approved_category";

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

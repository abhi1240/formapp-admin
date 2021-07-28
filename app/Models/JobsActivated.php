<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsActivated extends Model
{
  use HasFactory;

  protected $table = "jobs_activated";

  protected $fillable = [
      'id',
      'img_id',
      'is_id',
      'cs_id',
      'paper_title',
      'publication',
      'language_id',
      'language',
      'paper_img',
      'paper_img_url',
      'img_date',
      'var_title',
      'var_description',
      'apply_date',
      'walk_in',
      'phone',
      'email',
      'company_name',
      'address',
      'state',
      'city',
      'zip',
      'c_phone',
      'c_email',
      'website',
      'category',
      'openings',
      'experience',

  ];
}

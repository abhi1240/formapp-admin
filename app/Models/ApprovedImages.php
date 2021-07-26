<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedImages extends Model
{
  use HasFactory;

  protected $table = "images_approved";

  protected $fillable = [
      'id',
      'is_id',
      'paper_title',
      'publication',
      'description',
      'language_id',
      'language',
      'paper_img',
      'paper_img_url',
      'year',
      'month',
      'date',
      'img_date',
  ];
}

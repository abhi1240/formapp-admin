<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterTables extends Model
{
  use HasFactory;

  protected $table = "form_master_tables";

  protected $fillable = [
      'id',
      'name',
      'index',
  ];
}

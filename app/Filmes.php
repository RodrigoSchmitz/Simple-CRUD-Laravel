<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
  protected $table = 'filmes';
  public $timestamps = false;

  protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexRancom extends Model
{
    protected $table = 'index_random';
    protected $fillable = ['n', 'IR'];
}

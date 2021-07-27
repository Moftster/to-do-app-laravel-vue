<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{

    protected $fillable = ['description', 'due_date', 'completed'];

    use HasFactory;
}

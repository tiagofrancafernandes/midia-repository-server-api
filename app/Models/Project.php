<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $primaryKey = 'uuid';
    protected $primaryKeyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'uuid',
        'name',
        'short_description',
    ];
}

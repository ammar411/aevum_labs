<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company',
        'tech_stack',
        'need',
        'budget',
    ];
}

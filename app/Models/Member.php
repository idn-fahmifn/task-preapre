<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = [
        'team_id', 'nama', 'telpon'
    ];
}

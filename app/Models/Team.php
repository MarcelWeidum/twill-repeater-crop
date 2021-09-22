<?php

namespace App\Models;

use A17\Twill\Models\Model;

class Team extends Model 
{
    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
    public function members()
    {
        return $this->hasMany(TeamMember::class)->orderBy('position');
    }
}

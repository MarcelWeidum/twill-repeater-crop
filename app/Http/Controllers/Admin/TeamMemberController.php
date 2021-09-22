<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class TeamMemberController extends ModuleController
{
    protected $moduleName = 'teamMembers';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}

<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class TeamController extends ModuleController
{
    protected $moduleName = 'teams';
    
    protected $indexOptions = [
        'permalink' => false
    ];
    
}

<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\TeamMember;

class TeamMemberRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(TeamMember $model)
    {
        $this->model = $model;
    }
}

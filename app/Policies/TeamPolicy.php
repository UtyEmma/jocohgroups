<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Contracts\ManagesPlatforms;
use App\Models\Team;
use App\Models\User;

class TeamPolicy implements ManagesPlatforms {
    use HandlesPlatformPolicy;
    
    function getPolicyModel(): \Illuminate\Database\Eloquent\Model {
        return app(Team::class);
    }

}

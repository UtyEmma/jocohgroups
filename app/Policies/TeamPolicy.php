<?php

namespace App\Policies;

use App\Contracts\ManagesPlatforms;
use App\Models\Team;
use App\Models\User;

class TeamPolicy implements ManagesPlatforms {

    function getPolicyModel(): \Illuminate\Database\Eloquent\Model {
        return app(Team::class);
    }

}

<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Contracts\ManagesPlatform;
use App\Contracts\ManagesPlatforms;
use App\Enums\Platforms;
use App\Models\Career;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CareerPolicy implements ManagesPlatforms {
    use HandlesPlatformPolicy;

    function getPolicyModel() : Career {
        return app(Career::class);
    }

}

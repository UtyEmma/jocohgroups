<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Contracts\ManagesPlatforms;
use App\Models\Partner;
use App\Models\User;

class PartnerPolicy implements ManagesPlatforms {
    use HandlesPlatformPolicy;

    function getPolicyModel(): \Illuminate\Database\Eloquent\Model {
        return app(Partner::class);
    }
}

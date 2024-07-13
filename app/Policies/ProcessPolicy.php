<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Contracts\ManagesPlatforms;
use App\Models\Process;
use App\Models\User;

class ProcessPolicy implements ManagesPlatforms {
    use HandlesPlatformPolicy;

    function getPolicyModel(): \Illuminate\Database\Eloquent\Model{
        return app(Process::class);
    }
}

<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Models\Category;
use App\Models\User;

class CategoryPolicy {
    use HandlesPlatformPolicy;

    function getPolicyModel() : Category {
        return app(Category::class);
    }
   
}

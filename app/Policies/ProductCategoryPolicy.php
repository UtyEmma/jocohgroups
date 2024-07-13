<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Contracts\ManagesPlatforms;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductCategoryPolicy implements ManagesPlatforms {
    use HandlesPlatformPolicy;

    function getPolicyModel(): \Illuminate\Database\Eloquent\Model {
        return app(ProductCategory::class);
    }
    
}

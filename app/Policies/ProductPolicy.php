<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Contracts\ManagesPlatforms;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy implements ManagesPlatforms {
    use HandlesPlatformPolicy;

    function getPolicyModel(): Product {
        return app(Product::class);
    }

}

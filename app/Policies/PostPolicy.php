<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Contracts\ManagesPlatforms;
use App\Models\Post;
use App\Models\User;

class PostPolicy implements ManagesPlatforms {
    use HandlesPlatformPolicy;

    function getPolicyModel(): Post {
        return app(Post::class);
    }

}

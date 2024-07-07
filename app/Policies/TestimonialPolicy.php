<?php

namespace App\Policies;

use App\Concerns\Platforms\HandlesPlatformPolicy;
use App\Contracts\ManagesPlatforms;
use App\Models\Testimonial;


class TestimonialPolicy implements ManagesPlatforms {

    use HandlesPlatformPolicy;

    function getPolicyModel(): Testimonial {
        return app(Testimonial::class);
    }
}

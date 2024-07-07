<?php

namespace App\Policies;

use App\Enums\Platforms;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TestimonialPolicy {

    private Platforms $platform;

    public function __construct() {
        $this->platform = request()->platform();
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPlatform($this->platform);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Testimonial $testimonial): bool {
        return $user->hasPlatform($this->platform);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool {
        return $user->hasPlatform($this->platform);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Testimonial $testimonial): bool {
        return $user->hasPlatform($this->platform);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Testimonial $testimonial): bool {
        return $user->hasPlatform($this->platform);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Testimonial $testimonial): bool {
        return $user->hasPlatform($this->platform) && $user->role->isSuperAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Testimonial $testimonial): bool {
        return $user->hasPlatform($this->platform) && $user->role->isSuperAdmin();
    }
}

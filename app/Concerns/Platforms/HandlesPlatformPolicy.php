<?php

namespace App\Concerns\Platforms;

use App\Enums\Platforms;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait HandlesPlatformPolicy {

    private Model $model;
    private Platforms $platform;

    public function __construct() {
        $this->platform = request()->platform();
        $this->model = $this->getPolicyModel();
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
        return $this->model->allowedByPlatform($this->platform) && $user->allowedOnPlatform($this->platform);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, $model): bool
    {
        //
        return $model->allowedByPlatform($this->platform) && $user->allowedOnPlatform($this->platform);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return $this->model->allowedByPlatform($this->platform) && $user->allowedOnPlatform($this->platform);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, $model): bool
    {
        //
        return $model->allowedByPlatform($this->platform) && $user->allowedOnPlatform($this->platform);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, $model): bool
    {
        //
        return $model->allowedByPlatform($this->platform) && $user->allowedOnPlatform($this->platform);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, $model): bool
    {
        //
        return ($model->allowedByPlatform($this->platform) && $user->allowedOnPlatform($this->platform)) || $user->role->isSuperAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, $model): bool
    {
        //
        return ($model->allowedByPlatform($this->platform) && $user->allowedOnPlatform($this->platform)) || $user->role->isSuperAdmin();
    }

}
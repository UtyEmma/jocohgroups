<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Platforms;
use App\Enums\Roles;
use App\Enums\Status;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\HasTenants;
use Filament\Panel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\AsEnumArrayObject;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

class User extends Authenticatable implements FilamentUser, HasName {
    use HasFactory, Notifiable, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', 'status', 'avatar', 'role', 'platforms'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'status' => Status::class,
            'role' => Roles::class,
            'platforms' => AsEnumArrayObject::of(Platforms::class)
        ];
    }

    function scopeCanPublish(Builder $query) {
        $query->where('role', Roles::ADMIN)
                ->orWhere('role', Roles::SUPERADMIN)
                ->orWhere('role', Roles::AUTHOR)
                ->orWhere('role', Roles::EDITOR);
    }

    function scopeIsAdmin(Builder $query) {
        $query->where('role', Roles::ADMIN)->orWhere('role', Roles::SUPERADMIN);
    }

    public function canAccessPanel(Panel $panel): bool {
        return in_array($this->role, [Roles::ADMIN, Roles::SUPERADMIN, Roles::EDITOR, Roles::AUTHOR]);
    }

    function getFilamentName(): string {
        return $this->name;
    }

    public function platforms(){
        return $this->belongsToMany(Platform::class);
    }
 
    // public function getTenants(Panel $panel): Collection {
    //     return $this->platforms;
    // }
 
    // public function canAccessTenant(Model $tenant): bool
    // {
    //     return $this->platforms()->whereKey($tenant)->exists();
    // }

}

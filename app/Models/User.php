<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * Role constants
     */
    public const ROLE_USER = 0;
    public const ROLE_ADMIN = 1;
    public const ROLE_SUPERADMIN = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'status'
    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the role name based on stored integer.
     */
    public function getRoleNameAttribute(): string
    {
        return match ($this->role) {
            self::ROLE_ADMIN => 'admin',
            self::ROLE_SUPERADMIN => 'superadmin',
            default => 'user',
        };
    }

    /**
     * Check if user has a specific role.
     */
    public function hasRole(?string $role = null): string|bool
    {
        $roleMapping = [
            self::ROLE_USER => 'user',
            self::ROLE_ADMIN => 'admin',
            self::ROLE_SUPERADMIN => 'superadmin',
        ];

        // If no role is passed, return the role name
        if (is_null($role)) {
            return $roleMapping[$this->role] ?? 'unknown';
        }

        // Otherwise, check if the user has the given role
        return isset($roleMapping[$role]) && $this->role === $roleMapping[$role];
    }
}

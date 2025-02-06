<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'remember_token',
        'email_verified_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function newsComments()
    {
        return $this->hasMany(NewsComment::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // You can customize the access rules based on panel ID
        return match ($panel->getId()) {
            'admin' => $this->isAdmin(),
            'user' => $this->isUser(),
            default => false,
        };
    }

    // Helper methods for role checking
    private function isAdmin(): bool
    {
        return $this->role === 'admin';
    }


    private function isUser(): bool
    {
        return $this->role === 'user';
    }
}

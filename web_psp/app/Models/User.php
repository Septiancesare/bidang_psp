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
            default => str_ends_with($this->email, '@psp.com'),
        };
    }

    // Helper methods for role checking
    private function isAdmin(): bool
    {
        return $this->role === 'admin' &&
            (str_ends_with($this->email, '@yourdomain.com') || str_ends_with($this->email, '@psp.com'));
    }


    private function isUser(): bool
    {
        return $this->role === 'user';
    }
}

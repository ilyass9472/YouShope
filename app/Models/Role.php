<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    public function isAdmin(): bool
    {
        return $this->name === 'admin';
    }
    public function isClient(): bool
{
    return $this->name === 'client';
}
}

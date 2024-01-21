<?php

namespace App\Policies;

use App\Models\User;

class BlogPolicy
{
    public function viewAny(?User $user): bool
    {
        return true;
    }

    public function view(?User $user): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->is_admin === true;
    }

    public function update(User $user): bool
    {
        return $user->is_admin === true;
    }

    public function delete(User $user): bool
    {
        return $user->is_admin === true;
    }

    public function restore(User $user): bool
    {
        return $user->is_admin === true;
    }

    public function forceDelete(User $user): bool
    {
        return $user->is_admin === true;
    }
}

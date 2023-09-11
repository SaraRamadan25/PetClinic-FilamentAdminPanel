<?php

namespace App\Policies;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function ViewAny(): bool
    {
        return auth()->user()->role->name === 'admin';
    }

    public function update(): bool
    {
        return auth()->user()->role->name === 'admin';
    }
    public function create(): bool
    {
        return auth()->user()->role->name === 'admin';
    }

    public function delete(): bool
    {
        return auth()->user()->role->name === 'admin';
    }
}

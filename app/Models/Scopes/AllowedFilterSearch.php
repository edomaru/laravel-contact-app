<?php

namespace App\Models\Scopes;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait AllowedFilterSearch
{
    public function scopeForUser(Builder $query, User $user)
    {
        // return $query->where('user_id', $user->id);
        return $query->whereBelongsTo($user);
    }

    public function scopeAllowedFilters(Builder $query, ...$keys)
    {
        foreach ($keys as $key) {
            if ($value = request()->query($key)) {
                $query->where($key, $value);
            }
        }
        return $query;
    }

    public function scopeAllowedSearch(Builder $query, ...$keys)
    {
        if ($search = request()->query('search')) {
            foreach ($keys as $index => $key) {
                $method = $index === 0 ? 'where' : 'orWhere';
                $query->{$method}($key, "LIKE", "%{$search}%");
            }
        }
        return $query;
    }

    public function scopeAllowedTrash(Builder $query)
    {
        if (request()->query('trash')) {
            $query->onlyTrashed();
        }
        return $query;
    }
}

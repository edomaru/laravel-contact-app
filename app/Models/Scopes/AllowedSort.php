<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;

trait AllowedSort
{
    public function scopeAllowedSorts(Builder $query, string $column)
    {
        return $query->orderBy($column);
    }
}

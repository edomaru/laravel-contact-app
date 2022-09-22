<?php

namespace App\Models\Scopes;

trait SimpleSoftDeletes
{
    protected static function bootSimpleSoftDeletes()
    {
        static::addGlobalScope(new SimpleSoftDeletingScope);
    }
}

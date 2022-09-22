<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SimpleSoftDeletingScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->whereNull('deleted_at');
    }

    public function extend(Builder $builder)
    {
        $this->addWithTrashed($builder);
        $this->addOnlyTrashed($builder);
    }

    public function addWithTrashed(Builder $builder)
    {
        $builder->macro('withTrashed', function (Builder $builder) {
            return $builder->withoutGlobalScope($this);
        });
    }

    public function addOnlyTrashed(Builder $builder)
    {
        $builder->macro('onlyTrashed', function (Builder $builder) {
            return $builder->withoutGlobalScope($this)->whereNotNull('deleted_at');
        });
    }
}

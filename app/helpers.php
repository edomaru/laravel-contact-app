<?php

use Illuminate\Support\Str;

function sortable($label, $column = null)
{
    $column = $column ?? Str::snake($label);
    $sortBy = request()->query('sort_by');
    $sortBy = !$sortBy || strpos($sortBy, "-") === 0 ? $column : "-{$column}";
    $url = request()->fullUrlWithQuery(['sort_by' => $sortBy]);
    return "<a href='{$url}'>{$label}</a>";
}

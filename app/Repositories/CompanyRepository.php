<?php

namespace App\Repositories;

use App\Models\Company;
use App\Models\User;

class CompanyRepository
{
    public function pluck(User $user)
    {
        return Company::forUser($user)->orderBy('name')->pluck('name', 'id');
    }
}

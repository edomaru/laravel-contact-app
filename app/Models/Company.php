<?php

namespace App\Models;

use App\Models\Scopes\AllowedFilterSearch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes, AllowedFilterSearch;

    // protected $table = "app_companies";
    // protected $primaryKey = "_id";
    protected $fillable = ['name', 'email', 'address', 'website'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Project extends Model
{
    use HasFactory;

    protected $guarded = []; //Modify

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}

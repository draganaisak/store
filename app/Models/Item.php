<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Item
 *
 * @mixin Builder
 */

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'is_available'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

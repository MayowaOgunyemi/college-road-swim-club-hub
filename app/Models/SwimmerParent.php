<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwimmerParent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'swimmer_id',
        'parent_id'
    ];

    /**
     * Get the swimmer associated with the relationship.
     */
    public function swimmer()
    {
        return $this->hasMany(User::class, 'swimmer_id')->where('role_id', $swimmerRoleId);
    }

    /**
     * Get the parent associated with the relationship.
     */
    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id')->where('role_id', $parentRoleId);
    }
}

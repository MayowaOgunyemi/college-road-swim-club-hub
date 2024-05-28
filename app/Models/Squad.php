<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'coach_id',
        'swimmer_id',
    ];

    /**
     * Get the coach associated with the squad.
     */
    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id')->where('role_id', $coachRoleId);
    }

    /**
     * Get the swimmers associated with the squad.
     */
    public function swimmers()
    {
        return $this->hasMany(User::class, 'swimmer_id')->where('role_id', $swimmerRoleId);
    }
}

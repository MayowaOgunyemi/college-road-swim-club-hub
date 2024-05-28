<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'stroke_id',
        'swimmer_id',
        'distance',
        'lane',
        'total_time',
        'place',
        'points',
    ];

    /**
     * Get the stroke associated with the competition.
     */
    public function stroke()
    {
        return $this->belongsTo(Stroke::class);
    }

    /**
     * Get the swimmer associated with the competition.
     */
    public function swimmer()
    {
        return $this->hasMany(User::class, 'swimmer_id')->where('role_id', $swimmerRoleId);
    }
}

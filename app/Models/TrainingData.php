<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingData extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trainingsession_id',
        'coach_id',
        'swimmer_id',
        'distance',
        'duration',
        'sets',
        'reps',
        'stroke_id',
    ];

    /**
     * Get the training session associated with the training data.
     */
    public function trainingSession()
    {
        return $this->belongsTo(TrainingSession::class);
    }

    /**
     * Get the coach associated with the training data.
     */
    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id')->where('role_id', $coachRoleId);
    }

    /**
     * Get the swimmer associated with the training data.
     */
    public function swimmer()
    {
        return $this->belongsTo(User::class, 'swimmer_id')->where('role_id', $swimmerRoleId);
    }

    /**
     * Get the stroke associated with the training data.
     */
    public function stroke()
    {
        return $this->belongsTo(Stroke::class);
    }
}

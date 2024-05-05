<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingSession extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_name',
        'created_by'
    ];

    /**
     * Get the user who created the training session.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

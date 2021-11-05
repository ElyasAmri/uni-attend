<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'mentor_id',
        'room_id',
    ];

    public function attendees()
    {
        return $this->belongsToMany(Attendee::class, 'lecture_attendance', 'student_id');
    }
}

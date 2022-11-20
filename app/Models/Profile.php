<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'phone_1',
        'phone_2',
        'another_email',
        'address',
        'website',
        'linked_in',
        'twitter',
        'languages_spoken',
        'languages_written',
        'biography',
        'academic_achievement_1',
        'academic_achievement_2',
        'academic_achievement_3',
        'academic_achievement_4',
        'academic_achievement_5',
        'professional_achievement_1',
        'professional_achievement_2',
        'professional_achievement_3',
        'professional_achievement_4',
        'professional_achievement_5',
    ];

    // User has one profile
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

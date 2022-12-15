<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'tags',
        'description',
        'slots',
        'lt',
        'wage',
        'start_date',
        'end_date'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false)
        {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
    }

    // Listing relationship with a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // This listing may have requirements
    public function requirements()
    {
        return $this->hasOne(Requirement::class);
    }
}

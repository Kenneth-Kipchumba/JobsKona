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
        'company_id',
        'user_id',
        'title',
        'tags',
        'description',
        'slots',
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

    // Listing relationship with a company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // This listing may have requirements
    public function requirements()
    {
        return $this->hasOne(Requirement::class);
    }
}

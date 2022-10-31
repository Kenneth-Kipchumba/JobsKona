<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'website',
        'email',
        'phone',
        'logo',
        'description'
    ];

    // Company relationship with listings
    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    // Company relationship with a user
    public function company()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'listing_id',
        'requirement_1',
        'requirement_2',
        'requirement_3',
        'requirement_4',
        'requirement_5'
    ];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}

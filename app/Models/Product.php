<?php

namespace App\Models;

use App\Models\Vote;
use App\Models\Rating;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['average_rating'];

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'product_id', 'ID');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'product_id', 'ID');
    }

    public function votes()
    {
        return $this->belongsTo(Vote::class);
    }
}
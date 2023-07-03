<?php

namespace App\Models;

use App\Models\Vote;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['average_rating'];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function votes()
    {
        return $this->belongsTo(Vote::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updated(function ($product) {
            $product->ratings->each->updateAverageRating();
        });
    }
}

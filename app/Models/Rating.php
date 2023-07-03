<?php

namespace App\Models;

use App\Models\Vote;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['rating'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class, 'rating_id', 'id');
    }

    public function updateAverageRating()
    {
        $averageRating = $this->avg('rating');
        $this->product->average_rating = $averageRating;
        $this->product->save();
    }
}

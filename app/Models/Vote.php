<?php

namespace App\Models;

use App\Models\Rating;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;

    protected $table = 'votes';

    protected $fillable = ['product_id', 'rating_id', 'helpful', 'unhelpful'];

    function product() {
        return $this->belongsTo(Product::class);
    }

    public function rating()
    {
        return $this->belongsTo(Rating::class, 'rating_id', 'ID');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $terms)
    {
        collect(explode(" ", $terms))
                ->filter()
                ->each(function($term) use($query){
                    $term = '%' . $term . '%';

                    $query->where('brand', 'like', $term)
                        ->orWhere('name', 'like', $term)
                        ->orWhere('prize', 'like', $term)
                        ->orWhere('color', 'like', $term)
                        ->orWhere('size', 'like', $term);
                });
    }
}

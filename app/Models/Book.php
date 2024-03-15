<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    protected $fillable = [
      'isbn', 'title', 'subtitle', 'published','rating','description','user_id'
    ];

    public function isFavourite() : bool {
        return $this->rating >= 6;
    }

    public static function favourite() {
        return static::where('rating', '>=', 6)->get();
    }

}

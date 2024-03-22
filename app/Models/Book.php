<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * one book has many images
     */
    public function images() : HasMany {
        return $this->hasMany(Image::class);
    }

    /**
     * book is assigned to user (n : 1)
     */
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function authors() : BelongsToMany {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }
}

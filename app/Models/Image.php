<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url','title'
    ];

    /**
     * one book has many images
     */
    public function book() : BelongsTo {
        return $this->belongsTo(Book::class);
    }

}

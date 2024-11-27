<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','photo','description','publish_date','description','genre_id'
    ];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class,'genre_id');
    }
}

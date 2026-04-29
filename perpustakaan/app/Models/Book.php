<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'year',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    /**
     * Relasi: satu buku bisa dipinjam berkali-kali.
     */
    public function borrows(): HasMany
    {
        return $this->hasMany(Borrow::class);
    }

    /**
     * Scope untuk buku berdasarkan tahun terbit
     */
    public function scopePublishedIn($query, int $year)
    {
        return $query->where('year', $year);
    }
}

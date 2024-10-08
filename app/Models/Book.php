<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'price',
        'language',
        'quantity',
        'description',
        'cover',
        'file',
        'type',
    ];

    
    public function users(){
        return $this->belongsToMany(User::class);
    }
}

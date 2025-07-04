<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image'
    ];

    public function benefits() {
        return $this->hasMany(Benefit::class);
    }
}

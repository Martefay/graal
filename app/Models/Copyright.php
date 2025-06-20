<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copyright extends Model
{
    use HasFactory;

    protected $fillable = [
        'text'
    ];

    public function Copyrights() {
        return $this->hasMany(Copyright::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFooter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'link'
    ];

    public function contactfooters()
    {
        return $this->hasMany(ContactFooter::class);
    }
}

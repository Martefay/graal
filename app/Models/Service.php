<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'description',
        'namebutton'
    ];

    public function services() {
        return $this->hasMany(Service::class);
    }
}

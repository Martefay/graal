<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'is_active'
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}

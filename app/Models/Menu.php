<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorymenu_id',
        'name',
        'quantity',
        'price'
    ];

    public function categorymenu()
    {
        return $this->belongsTo(CategoryMenu::class, 'categorymenu_id');
    }

    // Метод для получения меню по categorymenu_id
    // public static function getByCategoryId($categoryId)
    // {
    //     return self::where('categorymenu_id', $categoryId)->get();
        
    // }

    public static function getByCategoryId($categoryId, $excludeId = null)
{
    return self::where('categorymenu_id', $categoryId)
             ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
             ->orderBy('name')
             ->get();
}



}

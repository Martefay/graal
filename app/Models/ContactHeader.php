<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContactHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        
        // 'phones' не должно быть здесь, так как это отношение, а не поле БД
    ];

    // Этот метод выглядит странно - контакт не должен ссылаться сам на себя
    // public function ContactHeaders()
    // {
    //     return $this->hasMany(ContactHeader::class);
    // }

    /**
     * Отношение к телефонам
     */
    public function phones(): HasMany
    {
        // Если используется стандартное имя внешнего ключа (contact_header_id)
        return $this->hasMany(Phone::class);
        
        // ИЛИ если используется кастомное имя (например, contact_id)
        // return $this->hasMany(Phone::class, 'contact_id');
    }
    public function timetables(): HasMany
    {
        // Если используется стандартное имя внешнего ключа (contact_header_id)
        return $this->hasMany(TimeTable::class);
        
        // ИЛИ если используется кастомное имя (например, contact_id)
        // return $this->hasMany(Phone::class, 'contact_id');
    }
    public function addresses(): HasMany
    {
        // Если используется стандартное имя внешнего ключа (contact_header_id)
        return $this->hasMany(Address::class);
        
        // ИЛИ если используется кастомное имя (например, contact_id)
        // return $this->hasMany(Phone::class, 'contact_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class address extends Model
{
    protected $table = 'addresses';
    
    /**
     * Определение отношения к контакту
     */
    public function contact(): BelongsTo
    {
        // Если внешний ключ в таблице phones называется 'contact_id' (стандартное соглашение)
        return $this->belongsTo(ContactHeader::class);
        
        // ИЛИ если вы используете кастомное имя внешнего ключа:
        // return $this->belongsTo(ContactHeader::class, 'contact_header_id');
    }
    
    /**
     * Массово назначаемые атрибуты
     */
    protected $fillable = [
        'place',
        'link',
        'contact_id', // или 'contact_header_id' в зависимости от вашей структуры
    ];
    
    /**
     * Приведение типов атрибутов
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}

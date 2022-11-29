<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_department_id',
        'name',
        'icon',
        'description'
    ];

    public function department(): BelongsTo
    {
        // Or: return $this->belongsTo(ServiceDepartment::class);
        return $this->belongsTo(ServiceDepartment::class, 'service_department_id');
    }
}

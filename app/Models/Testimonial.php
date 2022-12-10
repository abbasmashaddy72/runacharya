<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'name',
        'rating',
        'message'
    ];

    public function doctor(): BelongsTo
    {
        // Or: return $this->belongsTo(ServiceDepartment::class);
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}

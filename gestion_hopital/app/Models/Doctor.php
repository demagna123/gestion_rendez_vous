<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'contact',
        'spécialité',
        'disponibilité',
        'patient_id',
        'consultation_id',
        
    ];

    public function patient () : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    public function consultation () : BelongsTo
    {
        return $this->belongsTo(Consultation::class);
    }
}

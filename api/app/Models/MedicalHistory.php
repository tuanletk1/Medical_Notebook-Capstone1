<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'symptom',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'date:d-m-Y',
        'updated_at' => 'date:d-m-Y',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medical_histories';
}

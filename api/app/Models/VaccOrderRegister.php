<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccOrderRegister extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'address_injection_id',
        'staff_id',
        'symptom',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vacc_order_register';
}

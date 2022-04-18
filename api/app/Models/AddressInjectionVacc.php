<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressInjectionVacc extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vaccination_id',
        'address_injection_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'address_injection_vacc';
}

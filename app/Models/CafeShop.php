<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeShop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'time_open',
        'time_close',
        'photoUrl',
        'air_conditioner',
        'user_id',
        'star',
        'isOpen',
        'approve',
        'curr_seat',
        'max_seat',
        'seat_diff'
    ];
    public $timestamps = false;

    protected $attributes = [
        'curr_seat' => 0,
    ];

}

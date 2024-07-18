<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'name',
        'email',
        'phone',
        'payment_status',
        'status',
        'start_date',
        'end_date',
        'amount',
        'refund_amount'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}

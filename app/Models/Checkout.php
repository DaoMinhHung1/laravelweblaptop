<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'checkout';

    // Các trường dữ liệu có thể được gán
    protected $fillable = [
        'user_id', 'total_price', 'orderstatus_id', 'phone', 'address'
    ];


    public function order() {
        return $this->hasMany(Order::class, 'checkout_id', 'id');
    } 
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function status() {
        return $this->belongsTo(OrdeStatus::class, 'orderstatus_id', 'id');
    }
}

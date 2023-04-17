<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'fullName',
        'email',
        'phone',
        'zipcode',
        'address',
        'status_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function orderItem(){
        return $this->hasMany(OrderItems::class);
    }

}

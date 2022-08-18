<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Pizza;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        // dd($this->belongsTo(User::class));
        return $this->belongsTo(User::class);
    }
    public function pizza()
    {
        dd($this->belongsTo(Pizza::class));
        return $this->belongsTo(Pizza::class);
    }
}

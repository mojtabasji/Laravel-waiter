<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'factor_id',
        'food_id',
        'count',
        'served',
    ];

    protected $attributes = [
        'served' => 0
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function facture()
    {
        return $this->belongsTo(Facture::class);
    }

}

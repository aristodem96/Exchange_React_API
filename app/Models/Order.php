<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['cryptocurrency_send_name', 'cryptocurrency_receive_name', 'amount_of_cryptocurrency_send', 'amount_of_cryptocurrency_receive'];
}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Purchased_item extends Model
{
    protected $table = 'purchased_items';

    protected $fillable = [
        'CodProdotto',
        'acquisto'
    ];

}
?>
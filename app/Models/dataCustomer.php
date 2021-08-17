<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataCustomer extends Model
{
    protected $table = 'datacustomers';
    use HasFactory;
    protected $fillable = [
        'customername',
        'phone',
        'address',
    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressDetail extends Model
{
    use HasFactory;

    protected $table = 'address_details';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps= true;

}

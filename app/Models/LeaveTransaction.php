<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveTransaction extends Model
{
    use HasFactory;

    protected $table = 'leave_transaction';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps= true;
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
    use HasFactory;

    protected $table = 'empolyee_leaves';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps= true;

}

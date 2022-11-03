<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Robot_orderTotalModel extends Model
{
    use HasFactory;

    protected $table = 'robot_orderTotal';
    
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $guarded = ['id'];

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    // relationship between attendance and users can be set here

    // i can state what i want to change the defualt values here
    // eg table name, default id value, show/hide timestamp
    // protected $table = 'Attendance';
    // protected $primaryKey = 'item_id';
    // protected $timestamps = 'false';

}

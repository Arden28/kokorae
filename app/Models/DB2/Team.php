<?php

namespace App\Models\DB2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $connection = 'mysql_2';
    public $table = 'teams';

    protected $guarded = [];
}

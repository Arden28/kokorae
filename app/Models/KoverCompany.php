<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class KoverCompany extends Model
{

    use HasFactory;

    // protected $connection = 'mysql';
    // public $table = 'kover_companies';

    protected $guarded = [];

    public function scopeIsKover(Builder $query, $kover_id)
    {
        return $query->where('kover_id', $kover_id);
    }
}

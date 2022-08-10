<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Ata extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'atas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'info',
        'assistant_id',
        'assistant_name'
    ];
}

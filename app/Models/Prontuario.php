<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Prontuario extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'prontuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'info',
        'assistant_id',
        'assistant_name',
        'student_id',
        'student_name',
        'student_registration'
    ];
}

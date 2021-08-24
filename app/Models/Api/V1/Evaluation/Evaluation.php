<?php

namespace App\Models\Api\V1\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [ 'company' , 'stars', 'comment' ];

} // Evaluation

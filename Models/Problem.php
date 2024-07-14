<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $table = 'problem';
    protected $fillable = ['problem_name','p_img','p_detail','p_location','p_date'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserVote;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
 

class Suggestion extends Model
{
    use HasFactory;
    protected $table = 'suggestion';
    protected $fillable = ['topic_name','s_detail'];

    
    public function user_vote(): HasMany {
        return $this->hasMany(UserVote::class);
    }
    
}
    
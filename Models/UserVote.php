<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Vote;
use App\Models\Suggestion;
 

class UserVote extends Model
{
    use HasFactory;

    protected $table = 'user_vote';
    protected $fillable = ['vote_id','suggestion_id'];

    public function vote(): BelongsTo {
        return $this->belongsTo(Vote::class, 'vote_id');
    }
    public function suggestion(): BelongsTo {
        return $this->belongsTo(Suggestion::class, 'suggestion_id');
    }
}

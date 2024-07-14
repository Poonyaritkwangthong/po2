<?php


namespace App\Http\Controllers;
use App\Models\UserVote;
use App\Models\Suggestion;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class VoteChartController extends Controller
{
    public function dashboard(){
       $vote_count_agree = DB::table('user_vote')
       ->join('vote','user_vote.vote_id','=','vote.id')
       ->join('suggestion','user_vote.suggestion_id','=','suggestion.id')
       ->where('vote.id', 1)
       ->select(DB::raw('count(*) as vote_count,suggestion.topic_name'))
       ->groupBy(DB::raw('suggestion.topic_name'))
       ->pluck('vote_count','topic_name');
       $labels_agree = $vote_count_agree->keys();
       $data_agree = $vote_count_agree->values();

       $vote_count_disagree = DB::table('user_vote')
       ->join('vote','user_vote.vote_id','=','vote.id')
       ->join('suggestion','user_vote.suggestion_id','=','suggestion.id')
       ->where('vote.id', 2)
       ->select(DB::raw('count(*) as vote_count,suggestion.topic_name'))
       ->groupBy(DB::raw('suggestion.topic_name'))
       ->pluck('vote_count','topic_name');
       $labels_disagree = $vote_count_disagree->keys();
       $data_disagree = $vote_count_disagree->values();

        return view('vote_count.vote_chart',compact('labels_agree','data_agree', 'labels_disagree', 'data_disagree'));
    }
}

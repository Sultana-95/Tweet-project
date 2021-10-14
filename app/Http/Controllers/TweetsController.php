<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\User;
use Auth;


class TweetsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function timeline(){
        
        $data['tweets'] = Tweet::all(); 
        //$data['tweets'] = [];
        return view('tweets.timeline',$data);
    }
    
    public function createTweet(Request $request){

        //return $request;
        $tweet = new Tweet();
        $tweet->content = $request->tweet_content;
        $tweet->user_id = Auth::user()->id;
        $tweet->save();
    }

    public function displayTweetdetails($tweet_id){

        $data['tweet'] = Tweet::findOrfail($tweet_id); 
        return view('tweets.tweets-details',$data);


    }

}

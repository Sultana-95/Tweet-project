<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['hello']);
    }

   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function hello(){

       
       
        $first="Sultana";
        $second="Ahmed";

        $user = User::where('id',1)->get();
        if($user){
        return $user[0]->name. "|".$user[0]->email;
        }

        else{
            return "user not found";
        }
      
    }}

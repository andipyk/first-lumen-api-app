<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('age', ['only' => ['getUser']]);
        $this->middleware('age', ['except' => ['getUser']]);

    }

    public function generateKey(){

        return str_random(32);
    }

    public function fooExample(){
      return 'ExampleController@fooExample';
    }

    public function getUser($id){
      return $id;
    }

    public function getPost($cat1, $cat2)
    {
      return 'cat 1 | cat 2 => '.$cat1.' | '.$cat2;
    }

    public function getProfile()
    {
      echo "<a href='".route('profile.action')."'>Ke TKP</a>";
    }
    public function getProfileAction()
    {
      echo "<a href='".route('profile')."'>Balik ke markas gan</a>";
    }
}

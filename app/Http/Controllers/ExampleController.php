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
        //
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
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MusicModel;

class MusicController extends BaseController
{
    public function index()
    {
        //
    }

    public function home(){
        {
            $user = new MusicModel();
            $data = [
                'users' => $user->findAll(),
            ];
           return view('home', $data);
        }
    }

    public function insert_playlist(){
        return view('insert_playlist');
    }

}

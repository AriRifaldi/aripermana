<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class haicontroller extends Controller
{
    public function index(Request$request, $nik)
    {

        $result = " Hai ".$request->nama." dengan Nik "
                        .$nik." dan id ".$request->id;
        return $result;
    }
}

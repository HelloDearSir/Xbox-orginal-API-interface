<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class XboxGames extends Controller
{
        /* 
        * @return response()
        */
    public function index(Request $resquest) {
        // response to the URL
        $response = Http::get("https://xboxoriginalapi-production.up.railway.app/games/");
        $posts = $response->json();
        dd($posts);
    }
    }

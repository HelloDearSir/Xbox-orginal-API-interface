<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XboxGamesController; 
Route::get("XboxGames", [XboxGamesController::class, "index"]);
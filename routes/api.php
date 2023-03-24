<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

function translate ($word) {
    if (strlen($word) <= 2) {
        return $word;
    }

    return substr($word, 1) . '-' . substr($word, 0, 1) . 'erb';
}

Route::get('/{text}', function ($text) {
    $words = explode(' ', $text);
    $words = array_map('translate', $words);
    $words = implode(' ', $words);

    return response()->json([
        'original' => $text,
        'translation' => $words,
    ]);
});
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class QuestionnarieController extends Controller
{
    public function index(Request $request, $locale)
    {
        App::setLocale($locale);
        return view('welcome');
    }

    public function result(Request $request, $locale)
    {

        App::setLocale($locale);

        // TODO Answers into the database

        // TODO get a randam present item

        // TODO get a randam present item image

        // TODO set a image & statement

        $request->session()->regenerateToken();

        return view('result');
    }
}

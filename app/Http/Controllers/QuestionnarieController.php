<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnarieController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function result(Request $request)
    {

        // TODO Answers into the database

        // TODO get a randam present item

        // TODO get a randam present item image

        // TODO set a image & statement

        return view('result');
    }
}

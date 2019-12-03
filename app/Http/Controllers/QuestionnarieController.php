<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class QuestionnarieController extends Controller
{
    public function index(Request $request, $locale)
    {
        App::setLocale($locale);
        return view('welcome')->with(['list' => Question::with('answers')->get()]);
    }

    public function result(Request $request, $locale)
    {

        App::setLocale($locale);

        // TODO Generate a Recieved Number
        $recieved_number = str_pad(1, 10, 0, STR_PAD_LEFT);

        // TODO Answers into the database

        // TODO get a randam present item

        // TODO get a randam present item image
        $image = (base64_encode(Storage::disk('public')->get('cartman.jpg')));

        // TODO set a image & statement

        $request->session()->regenerateToken();
        return view('result')->with(['image' => $image, 'recieved_number' => $recieved_number]);
    }

    public function list(Request $request)
    {
        return view('list');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MainController extends Controller
{
    /*Функции для гланой home */
    public function home() {
        return view('home');
    }

    /*Функции для описания about */
    public function about() {
        return view('about');
    }

    /*Функции для отзывов review*/
    public function review() {

        $reviews = new Contact();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);

        /*Работа с бд: вовод данных и запись*/
        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');
        $review->created_at = now();
        $review->save();

        /*Переадрисация на отзывы*/
        return redirect()->route('review');

    }
}

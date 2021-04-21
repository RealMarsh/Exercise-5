<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
    public function about () {
        return view('about');
    }

        public function list()
    {
        $list = array(
            '1- The Silence of Murder
            ISBN: 9780375872938
            Book category: BX, Fiction, Teenage / Young Adult, WBD
            Number of pages: 327',

            '2- I Lost My Way Finding Happiness after Despair
            ISBN: 9789671740248
            Book category: Motivation, Spiritual
            Number of pages: 62',

            '3- The Worlds Favourite Agatha Christie
            ISBN: 9780008158613
            Book category: Bestseller, BX, Crime, Fiction, Mystery and Thriller, WBD, Woman Authors
            Number of pages: Varies',
        );
        return view('list', compact('list'));
    }
}

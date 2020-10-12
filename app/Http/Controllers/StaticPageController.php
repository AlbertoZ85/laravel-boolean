<?php

namespace App\Http\Controllers;

class StaticPageController extends Controller {
    public function home() {
        return view('home');
    }

    public function chiSiamo() {
        return view('chisiamo');
    }
}

<?php

namespace App\Http\Controllers;

class StudentController extends Controller {
    public function studenti() {
        $data = config('students');
        return view('studenti', compact('data'));
    }
}

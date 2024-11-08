<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class MainController extends Controller {
    public function index() {
        $gitdata = $this->githubAccountData();
        $privaterepo = $this->githubPrivateData();
        // $privateevents = $this->getMostUsedLanguage();
        // dd($privateevents);

        return view('landing', compact('gitdata', 'privaterepo'));
    }
}

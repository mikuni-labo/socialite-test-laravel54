<?php

namespace App\Http\Controllers\Socialite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * GitHub test.
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        dd('here');
    }

    /**
     * Callback from GitHub.
     *
     * @param Request $request
     */
    public function callback(Request $request)
    {
        dd('here');
    }
}

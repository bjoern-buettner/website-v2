<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['locale' => ['required']]);

        App::setLocale($validated['locale']);
        Session::put('locale', $validated['locale']);

        return Redirect::back();
    }
}

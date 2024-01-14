<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'user' => Auth::user(),
            'locale' => Session::get('locale'),
            'flash' => [
                'success' => $request->session()->get('success'),
                'error' => $request->session()->get('error')
            ],
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;
use Throwable;

class AuthController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Auth/Login');
    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request): RedirectResponse
    {
        try {
            $validated = $request->validate(
                [
                    'email' => 'required|email',
                    'password' => 'required|string|bail',
                    'remember_me' => 'required|boolean|bail'
                ]
            );
        } catch (Throwable $t) {
            return Redirect::back();
        }

        if (
            !Auth::attempt(
                [
                    'email' => $validated['email'],
                    'password' => $validated['password']
                ],
                $validated['remember_me']
            )
        ) {
            throw ValidationException::withMessages(['generic' => __('auth.failed')]);
        }

        $request->session()->regenerate();

        /** @var User $user */
        $user = Auth::user();
        Log::info(sprintf('User "%s" logged in (%s)', $user->email, $request->ip()));

        return Redirect::route('app.home');
    }

    public function logout(Request $request): RedirectResponse
    {
        /** @var User $user */
        $user = Auth::user();
        Log::info(sprintf('User "%s" logged out (%s)', $user->email, $request->ip()));

        Auth::logout();

        return Redirect::route('app.auth.login')->with('success', __('auth.logout'));
    }
}

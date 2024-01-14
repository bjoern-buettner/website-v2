<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
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

    public function forgotPassword(): Response
    {
        return Inertia::render('Auth/ForgotPassword');
    }

    public function forgotPasswordSubmit(Request $request): RedirectResponse
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        Log::info(
            sprintf(
                'User "%s" requested reset password link (%s)',
                $request->get('email'),
                $request->ip()
            )
        );

        return match ($status) {
            Password::RESET_LINK_SENT => Redirect::back()->with('success', __($status)),
            Password::RESET_THROTTLED => Redirect::back()->with('error', __($status)),
            default => Redirect::back()->with('error', __('passwords.user')),
        };
    }

    public function resetPassword(Request $request): Response
    {
        return Inertia::render(
            'Auth/ResetPassword',
            [
                'token' => $request->get('token'),
                'email' => $request->get('email')
            ]
        );
    }

    public function resetPasswordSubmit(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        Log::info(
            sprintf(
                'User "%s" changed password (%s)',
                $request->get('email'),
                $request->ip()
            )
        );

        return $status === Password::PASSWORD_RESET
            ? Redirect::route('app.auth.create')->with('success', __($status))
            : Redirect::back()->with('error', __($status));
    }
}

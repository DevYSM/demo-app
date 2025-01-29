<?php

namespace App\Http\Controllers;

use App\Examples\LSP\EmailProvider;
use App\Examples\LSP\MailChimp;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerWithBaseEmailProvider(Request $request, EmailProvider $emailProvider)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::create($attributes);

        $emailProvider->addSubscriber($user);

        return $emailProvider;
    }

    public function registerWithMailChimp(Request $request, MailChimp $convertKit)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::create($attributes);

        return $convertKit->addSubscriber($user);
    }

}

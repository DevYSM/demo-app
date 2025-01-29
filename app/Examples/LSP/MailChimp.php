<?php

namespace App\Examples\LSP;

use App\Models\User;

class MailChimp extends EmailProvider
{
    public function addSubscriber(User $user): array
    {
        return [
            'user' => $user,
            'provider' => 'MailChimp',
        ];
    }

    public function sendEmail(User $user): string
    {
        // Using MailChimp API
        return 'email sent successfully';
    }
}

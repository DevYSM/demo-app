<?php

namespace App\Examples\LSP;

use App\Models\User;

class ConvertKit extends EmailProvider
{
    public function addSubscriber(User $user): array
    {
        // Using MailChimp API
    }

    public function sendEmail(User $user): void
    {
        // Using MailChimp API
    }
}

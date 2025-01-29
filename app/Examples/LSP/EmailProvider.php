<?php

namespace App\Examples\LSP;

use App\Models\User;
use Exception;

abstract class EmailProvider
{
    abstract public function addSubscriber(User $user): array;

    /**
     * @throws Exception
     */
    abstract public function sendEmail(User $user): mixed;
}

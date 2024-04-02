<?php

namespace App\Events;

namespace App\Listeners;

use Illuminate\Support\Facades\Log;

use Illuminate\Auth\Events\Verified;

class LogVerifiedUser
{
    /**
     * Handle the event.
     *
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        // Get the verified user
        $user = $event->user;

        // Log the verification
        Log::info('User ' . $user->name . ' has been verified.');

        // You can perform additional actions here if needed
    }
}


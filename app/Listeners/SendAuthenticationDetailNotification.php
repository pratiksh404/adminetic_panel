<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Events\UserHasBeenRegistered;
use App\Mail\AuthenticationDetailMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAuthenticationDetailNotification
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->user->email)->send(new AuthenticationDetailMail($event->user->email, $event->user->name, $event->password));
    }
}

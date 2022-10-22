<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserVerificationMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendVerificationMailCodeToNewUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // Mail the verification code to the user

       Mail::to($event->user['email'])->send(new NewUserVerificationMail($event->code));
    }
}

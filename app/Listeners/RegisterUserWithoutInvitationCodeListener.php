<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserVerificationMail;
use App\Models\UserEmailConfirmation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterUserWithoutInvitationCodeListener
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

        if (!$event->userIsInvited) {

            // Create a new user registration
            $user = User::create($event->user);

            //Generate user verification code and store it
            UserEmailConfirmation::create([
                'user_id' => $user->id,
                'confirmation_code' => $event->code
            ]);

            // Create user role Default(Subscriber)
            UserRole::create([
                'user_id' => $user->id,
                'role' => 'Subscriber'
            ]);

            // Login the new user automatically
            Auth::login($user);

        }

    }
}

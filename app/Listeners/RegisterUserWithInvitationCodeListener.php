<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\UserEmailConfirmation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterUserWithInvitationCodeListener
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
        if ($event->userIsInvited) {


            // Create a new user registration
            $user = User::create($event->user);


            //Generate user verification code and store it
            UserEmailConfirmation::create([
                'user_id' => $user->id,
                'confirmation_code' => $event->code
            ]);


            // Create user role acording to the invitation code
            UserRole::create([
                'user_id' => $user->id,
                'role' => $event->userInvitationCode->used_for
            ]);


            // Update the invitation code (used_by, is_used)
            $event->userInvitationCode->update([
                'used_by' => $user->id,
                'is_used' => true,
            ]);


            // Login the new user automatically
            Auth::login($user);


            //  Log::info($event->userInvitationCode->invitation_code);



        }
    }
}

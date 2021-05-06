<?php

namespace App\Listeners;

use App\Events\UserEvent;
use App\Mail\UserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;

class UserListener
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
     * @param  UserEvent  $event
     * @return void
     */
    public function handle(UserEvent $event)
    {
        $user = $event->user;

        extract($event->params);

        switch ($action) {
            case 'register':

                Mail::to($user->email)->send(new UserMail($user, 'register', "Inscription sur le site", compact('password')));

                break;

            case 'login':

                Mail::to($user->email)->send(new UserMail($user, 'login', "Connexion sur le site"));

                break;

            case 'passwordForgot':

                Mail::to($user->email)->send(new UserMail($user, 'password_forgot', "Demande de réinitialisation de mot de passe sur le site"));

                break;

            case 'passwordReset':

                Mail::to($user->email)->send(new UserMail($user, 'password_reset', "Réinitialisation de mot de passe sur le site"));

                break;

            case 'activated':

                Mail::to($user->email)->send(new UserMail($user, 'activated', "Activation du compte sur le site"));

                break;

            case 'confirmed':

                Mail::to($user->email)->send(new UserMail($user, 'confirmed', "Authentification à deux facteurs sur le site"));

                break;

            case 'removingAccount':

                Mail::to($user->email)->send(new UserMail($user, 'account_removing', "Suppression du compte en cours..."));

                break;

            case 'enablingTFA':

                Mail::to($user->email)->send(new UserMail($user, 'tfa_enabling', "Activation/Désactivation de la double authentification (2FA) en cours..."));

                break;

            case 'removedAccount':

                Mail::to($user->email)->send(new UserMail($user, 'account_removed', "Suppression du compte"));

                break;

            case 'enabledTFA':

                Mail::to($user->email)->send(new UserMail($user, 'tfa_enabled', "Activation/Désactivation de la double authentification (2FA)"));

                break;

            default:
                # code...
                break;
        }
    }
}

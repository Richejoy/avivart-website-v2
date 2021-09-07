<?php

namespace App\Listeners;

use App\Events\UserEvent;
use App\Mail\UserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Log;

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

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'register', "Inscription sur le site", compact('password')));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'login':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'login', "Connexion sur le site"));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'passwordForgot':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'password_forgot', "Demande de réinitialisation de mot de passe sur le site"));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'passwordReset':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'password_reset', "Réinitialisation de mot de passe sur le site"));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'activated':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'activated', "Activation du compte sur le site"));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'confirmed':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'confirmed', "Authentification à deux facteurs sur le site"));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'removingAccount':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'account_removing', "Suppression du compte en cours..."));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'enablingTFA':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'tfa_enabling', "Activation/Désactivation de la double authentification (2FA) en cours..."));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'removedAccount':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'account_removed', "Suppression du compte"));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'enabledTFA':

                try {
                    Mail::to($user->email)->send(new UserMail($user, 'tfa_enabled', "Activation/Désactivation de la double authentification (2FA)"));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            default:
                # code...
                break;
        }
    }
}

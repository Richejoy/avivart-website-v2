<?php

namespace App\Http\Controllers;

use App\Events\UserEvent;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('settings.index');
    }

    public function removingAccount(Request $request)
    {
        if ($user = $request->user()) {
            $user->update([
                'token' => sha1(uniqid()),
            ]);

            event(new UserEvent($user, ['action' => 'removingAccount']));

            return back()->withSuccess("Veuillez confirmer votre demande dans votre boîte mail. Merci");
        }

        return back()->withDanger("Impossible de satisfaire votre requête.");
    }

    public function enablingTFA(Request $request)
    {
        if ($user = $request->user()) {
            $user->update([
                'token' => sha1(uniqid()),
            ]);

            event(new UserEvent($user, ['action' => 'enablingTFA']));

            return back()->withSuccess("Veuillez confirmer votre demande dans votre boîte mail. Merci");
        }

        return back()->withDanger("Impossible de satisfaire votre requête.");
    }
}

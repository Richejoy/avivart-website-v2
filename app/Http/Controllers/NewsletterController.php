<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewsletterEvent;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
    public function index(Request $request)
    {
        session()->put('verificationCode', $this->getFormVerificationCode());

        return view('newsletters.index');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'email' => 'required|email|min:3|max:40',
                //'verification_code' => 'required',
            ]);

            /*if ($request->verification_code != session('verificationCode')) {
                return back()->withDanger('Désolé, code de vérification incorrecte');
            }*/

            if (!Newsletter::whereEmail($request->email)->first()) {
                $newsletter = Newsletter::create(array_merge(
                    $request->all(),
                    [
                        'token' => sha1(uniqid())
                    ]
                ));

                event(new NewsletterEvent($newsletter, ['action' => 'subscribe']));
            }

            return back()->withSuccess("Merci pour votre suscription.");
        }

        return back();
    }

    public function unsubscribe(Request $request, string $email, string $token)
    {
        $newsletter = Newsletter::where(['email' => $email, 'token' => $token])->first();

        if ($newsletter) {
            $newsletter->update([
                'token' => null,
            ]);

            event(new NewsletterEvent($newsletter, ['action' => 'unsubscribe']));
        }

        return redirect()->route('page.index');
    }
}

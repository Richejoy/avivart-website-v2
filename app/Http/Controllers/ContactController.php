<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactTopic;
use App\Events\ContactEvent;

class ContactController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
        $contactTopics = ContactTopic::all()->sortBy('id')->pluck(null, 'id');
        
    	session()->put('verificationCode', $this->getFormVerificationCode());

    	return view('contacts.index', compact('contactTopics'));
    }

    public function store(Request $request)
    {
    	if ($request->isMethod('post')) {

            $this->validate($request, [
                'first_name' => 'required|min:2|max:25',
                'last_name' => 'required|min:2|max:25',
                'email' => 'required|email|min:3|max:40',
                'phone' => 'required|min:8|max:40',
                'contact_topic_id' => 'required',
                'message' => 'required|min:10',
                'verification_code' => 'required',
            ]);

            if ($request->verification_code != session('verificationCode')) {
                return back()->withDanger('Désolé, code de vérification incorrecte');
            }

            $contact = Contact::create($request->all());

            event(new ContactEvent($contact));

            return back()->withSuccess("Merci de nous avoir contacté. Vous aurez très bientôt nos nouvelles.");
        }

        return back();
    }
}

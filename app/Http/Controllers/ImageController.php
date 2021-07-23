<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function show(Request $request, Image $image)
    {
    	return view('images.show', compact('image'));
    }

    public function edit(Request $request, Image $image)
    {
        if ($request->isMethod('POST')) {
            switch ($request->form) {
                case 'link':
                    
                    $this->validate($request, [
                        'link' => ['required', 'bail', 'min:6'],
                        'description' => ['required', 'bail', 'min:6'],
                    ]);

                    $image->update($request->all());

                    return back()->withSuccess('Mises à jour éffectuées avec succès');

                    break;

                case 'url':
                    
                    $this->validate($request, [
                        'image' => 'required|mimes:jpeg,png,jpg,gif|max:10000',
                        'description' => ['required', 'bail', 'min:6'],
                    ]);

                    return back()->withSuccess('Données non pris en compte');

                    break;
                
                default:
                    return back();
                    break;
            }
        }

        return view('images.edit', compact('image'));
    }
}

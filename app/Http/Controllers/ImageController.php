<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Validation\Rule;

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
            if ($request->has('form')) {
                switch ($request->form) {
                    case 'link':
                        
                        $this->validate($request, [
                            'link' => ['required', 'bail', 'min:6'],
                            'description' => ['required', 'bail', 'min:6'],
                        ]);

                        $image->update(array_merge(
                            $request->all(),
                            [
                                'url' => $request->link,
                            ]
                        ));

                        return back()->withSuccess('Mises à jour éffectuées avec succès');

                        break;

                    case 'url':
                        
                        $this->validate($request, [
                            'image' => 'required|mimes:jpeg,png,jpg,gif|max:10000',
                            'description' => ['required', 'bail', 'min:6'],
                        ]);

                        //upload file
                        if ($request->hasFile('image') && $request->file('image')->isValid()) {
                            
                            //$uploadPath = $request->file('image')->path();

                            //$extension = $request->file('image')->extension();

                            //$name = $request->file('image')->getClientOriginalName();

                            $filename = time() . '.' . $request->file('image')->extension();

                            $storePath = $request->file('image')->storeAs("images/uploads/users/{$image->folder}", $filename, 'ftp');

                            $image->update([
                                'description' => $request->description,
                                'url' => $filename,
                                'link' => "http://avivart.net/images/uploads/users/{$image->folder}/" . $filename,
                            ]);

                            return back()->withSuccess("Modifications éffectuées");
                        }

                        break;
                    
                    default:
                        return back();
                        break;
                }
            }
        }

        return view('images.edit', compact('image'));
    }
}

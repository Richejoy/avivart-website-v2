<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdImage;
use App\Models\Ad;
use App\Models\Image;

class AdImageController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request, Ad $ad)
    {
        $adsImages = AdImage::where('ad_id', $ad->id)->get();

    	return view('ads_images.index', compact('ad', 'adsImages'));
    }

    public function create(Request $request, Ad $ad)
    {
        if ($request->isMethod('POST')) {
            switch ($request->form) {
                case 'link':
                    
                    $this->validate($request, [
                        'link' => ['required', 'bail', 'min:6'],
                        'description' => ['required', 'bail', 'min:6'],
                    ]);

                    $image = Image::create(
                        array_merge(
                            $request->all(),
                            [
                                'folder' => 'ads_images',
                                'url' => 'default.jpg',
                            ]
                        )
                    );

                    $adImage = AdImage::create([
                        'ad_id' => $ad->id,
                        'image_id' => $image->id,
                    ]);

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

        return view('ads_images.create', compact('ad'));
    }

    public function show(Request $request, AdImage $adImage)
    {
        $user = $request->user();

        return view('ads_images.show', compact('adImage'));
    }
}

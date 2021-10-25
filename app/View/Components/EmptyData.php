<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EmptyData extends Component
{
    public $module;

    public $imageURL;

    public $title;

    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($module = null)
    {
        $images = array(
            '01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', '06.jpg', '07.jpg', '08.jpg', '09.jpg', '10.jpg',
            '11.jpg', '12.jpg', '13.jpg', '14.jpg', '15.jpg', '16.jpg', '17.jpg', '18.jpg', '19.jpg', '20.jpg',
            '21.jpg', '22.jpg', '23.jpg', '24.jpg', '25.jpg',
        );
        $imgIndex = mt_rand(0, 24);

        switch ($module) {
            case 'ad':

                $this->module = "Annonces";
                
                $this->imageURL = "https://avivart.net/public/img/empty_data/{$images[$imgIndex]}";

                $this->title = 'Aucune donnée';

                $this->description = "Cette section ne contient rien pour le moment. Revenez plus tard merci!";

                break;

            case 'cosmetic':

                $this->module = "Cosmétique";
                
                $this->imageURL = "https://avivart.net/public/img/empty_data/{$images[$imgIndex]}";

                $this->title = 'Aucune donnée';

                $this->description = "Cette section ne contient rien pour le moment. Revenez plus tard merci!";

                break;

            case 'store':

                $this->module = "Boutique";
                
                $this->imageURL = "https://avivart.net/public/img/empty_data/{$images[$imgIndex]}";

                $this->title = 'Aucune donnée';

                $this->description = "Cette section ne contient rien pour le moment. Revenez plus tard merci!";

                break;
            
            default:

                $this->module = "AVIV'ART";
                
                $this->imageURL = "https://avivart.net/public/img/empty_data/{$images[$imgIndex]}";

                $this->title = 'Aucune donnée';

                $this->description = "Cette section ne contient rien pour le moment. Revenez plus tard merci!";

                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.empty-data');
    }
}

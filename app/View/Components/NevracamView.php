<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NevracamView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return function (array $data) {
            // $data['componentName'];
            // $data['attributes'];
            // $data['slot'];

            return "<div>Ovo je moja rukom napisana komponenta i pomoću callback funkcije vraćena. Za vrijednost slota dobio sam" .  $data['slot'] . "</div>";
        };
    }
}

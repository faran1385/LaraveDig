<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productImage extends Component
{
    public $imageSrc;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($imageSrc)
    {
        $this->imageSrc=$imageSrc;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-image');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Categorias;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $categorias;

    public function __construct()
    {
        $this->categorias = Categorias::orderby('categoria')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}

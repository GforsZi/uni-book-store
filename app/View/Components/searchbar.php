<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class searchbar extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $placeholder;
    public function __construct($url, $placeholder)
    {
        $this->url = $url;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.searchbar');
    }
}

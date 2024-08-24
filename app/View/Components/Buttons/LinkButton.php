<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkButton extends Component
{
    public string $action;
    public string $backgroundColor;
    public string $icon;

    /**
     * Create a new component instance.
     */
    public function __construct(string $action = '#', string $backgroundColor = '#000000', string $icon = '')
    {
        $this->action = $action; // Corrected assignment
        $this->backgroundColor = $backgroundColor;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.link-button');
    }
}

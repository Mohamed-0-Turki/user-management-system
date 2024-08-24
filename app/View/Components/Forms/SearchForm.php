<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchForm extends Component
{
    public string $action;
    public string $type;
    public string $placeholder;
    /**
     * Create a new component instance.
     */
    public function __construct(string $action = '#', string $type = 'text', string $placeholder = '')
    {
        $this->action = $action;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.search-form');
    }
}

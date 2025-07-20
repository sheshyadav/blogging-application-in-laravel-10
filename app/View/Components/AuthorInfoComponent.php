<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class AuthorInfoComponent extends Component
{
    public $author;
    /**
     * Create a new component instance.
     */
    public function __construct($author)
    {
        $this->author = User::find($author);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.author-info-component');
    }
}

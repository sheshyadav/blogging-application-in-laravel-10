<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;

class PostCardComponent extends Component
{
    public $postid;
    public $post;
    /**
     * Create a new component instance.
     */
    public function __construct($postid)
    {

        $this->post = Post::find($postid);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card-component');
    }
}

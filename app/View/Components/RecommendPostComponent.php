<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;

class RecommendPostComponent extends Component
{
    public $recommendedpost;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

        $this->recommendedpost = Post::select("title","slug")
        ->where("status", 1)->inRandomOrder()->limit(10)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recommend-post-component');
    }
}

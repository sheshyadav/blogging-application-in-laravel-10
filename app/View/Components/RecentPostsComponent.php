<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;

class RecentPostsComponent extends Component
{
    public $recentPosts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->recentPosts = Post::select("title","slug")
        ->where("status", 1)->limit(10)->orderBy("pid","DESC")->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recent-posts-component');
    }
}

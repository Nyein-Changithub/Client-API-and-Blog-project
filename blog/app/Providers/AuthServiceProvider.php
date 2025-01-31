<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('comment-delete', function ($user, Comment $comment) {
            return $user->id == $comment->user_id;
        });

        Gate::define('delete-article', function ($user, Article $article) {
            return $user->id === $article->user_id;
        });
    }
}

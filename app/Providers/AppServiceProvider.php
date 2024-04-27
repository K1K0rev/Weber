<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\CategoriesComposer;
use App\Http\View\Composers\LessonComposer;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('layouts.header', CategoriesComposer::class);
        View::composer('components.end_btn', CategoriesComposer::class);
        View::composer('component.end_btn', LessonComposer::class);
    }
}

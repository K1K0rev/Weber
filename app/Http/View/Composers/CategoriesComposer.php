<?php

namespace App\Http\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CategoriesComposer
{
    public function compose(View $view)
    {
        $user = Auth::user();
        $view->with('user', $user);
    }
}

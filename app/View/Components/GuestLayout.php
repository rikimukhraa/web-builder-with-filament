<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\SettingWeb;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $nav = cache()->remember('nav_menu', 60*60, function () {
            return Menu::where('parent_id', null)
                ->with('children')->where('is_active', true)
                ->orderBy('id')
                ->get();
        });


        return view('layouts.guest',[
            'nav' => $nav,
        ]);
    }
}

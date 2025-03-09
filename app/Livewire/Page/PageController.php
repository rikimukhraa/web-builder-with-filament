<?php

namespace App\Livewire\Page;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class PageController extends Component
{

    public function placeholder()
    {
        return view('livewire.skeleton.ske-page');
    }

    public function render()
    {
        return view('livewire.page.page-controller');
    }
}

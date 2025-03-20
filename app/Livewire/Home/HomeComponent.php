<?php

namespace App\Livewire\Home;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class HomeComponent extends Component
{
    public $hero;
    public $section;
    public function placeholder()
    {
        return view('livewire.skeleton.ske-hero',[
            'hero'=> $this->hero,
            'section'=> $this->section
        ]);
    }
    public function render()
    {

        return view('livewire.home.home-component',[
        ]);
    }
}

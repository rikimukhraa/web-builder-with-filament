<?php

namespace App\Livewire\List;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class ListController extends Component
{
    public $title;
    public $data =[];

    public function placeholder()
    {
        return view('livewire.skeleton.ske-page');
    }


    public function render()
    {
        return view('livewire.list.list-controller',[
            'title'=> $this->title,
            'data'=> $this->data
        ]);
    }
}

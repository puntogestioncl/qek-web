<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class ShowEvents extends Component
{


    public function render()
    {
        return view('livewire.show-events')->with([
            'events' => Event::inRandomOrder()->limit(1)->get()
        ]);
    }
}

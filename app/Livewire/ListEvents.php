<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class ListEvents extends Component
{
    public function render()
    {
        return view('livewire.show-events')->with([
            'events' => Event::all()
        ]);
    }
}

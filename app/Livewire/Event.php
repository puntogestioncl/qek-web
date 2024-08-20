<?php

namespace App\Livewire;

use Livewire\Component;

class Event extends Component
{
    public \App\Models\Event $event;

    public function render()
    {
        return view('livewire.event');
    }
}

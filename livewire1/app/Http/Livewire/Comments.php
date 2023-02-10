<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments  = [
        [
            'body' => 'Lorem ipsum maodisasdjaj sajdjahdjj djkljL
             DJPJDJADJjj dkjjdjjaj',
             'created_at' => '3 min ago',
             'creator' => 'Gabriel'
        ]
    ];

    public function render()
    {
        return view('livewire.comments');
    }

    public function addComment(){
        array_unshift($this->comments, [
            'body' => 'New Comment',
            'created_at' => '1 min ago',
            'creator' => 'Bitfumes'
        ]);
    }
}

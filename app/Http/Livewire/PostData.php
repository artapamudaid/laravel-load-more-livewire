<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostData extends Component
{

    public $limitPerPage = 10;

    protected $listeners = [
        'post-data' => 'postData'
    ];

    public function postData()
    {
        $this->limitPerPage = $this->limitPerPage + 6;
    }

    public function render()
    {
        $posts = Post::latest()->paginate($this->limitPerPage);
        $this->emit('postStore');

        return view('livewire.post-data', ['posts' => $posts]);
    }
}

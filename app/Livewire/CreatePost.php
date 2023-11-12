<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{
    #[Rule('required|min:3')]
    public $title = '';

    #[Rule('required|min:3')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}

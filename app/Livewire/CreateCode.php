<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message;

    protected array $symbols = [
        'eco',
        'person',
        'sign_language',
        'rocket_launch',
        'water_drop',
        'gavel',
        'diamond',
        'heart_broken',
        'skull',
        'emoji_events',
        'weight',
        'cyclone',
        'tornado',
        'eyeglasses',
        'crossword',
        'deceased',
        'taunt',
        'bug_report',
        'shopping_cart',
        'savings',
        'colorize',
        'search_hands_free',
        'ad_units',
        'anchor',
        'comedy_mask',
        'comic_bubble'
    ];

     #[Computed(persist: true)]
    public function letters(): array {
        shuffle($this->symbols);

        return collect(range('a', 'z'))
            ->combine($this->symbols)
            ->toArray();
    }

    public function render()
    {
        return view('livewire.create-code');
    }


}

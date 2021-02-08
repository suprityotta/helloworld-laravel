<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebar extends Component
{
    public $name;
    public $age;
    public $marks;
    public function __construct($name,$age,$marks)
    {
        $this->name=$name;
        $this->age=$age;
        $this->marks=$marks;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}

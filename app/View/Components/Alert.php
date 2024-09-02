<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */

     public $type, $message;
    public function __construct(string $type, string $message)
    {
        $this->type=$type;
        $this->message=$message;

        if($this->type == "danger"){
            $bgColor = "red";
        }
        elseif($this->type == "success"){
            $bgColor = "green";
        }
    

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
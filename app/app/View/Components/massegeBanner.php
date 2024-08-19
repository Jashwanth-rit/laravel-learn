<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class massegeBanner extends Component
{

    // THE MSG IS PASSED FROM WELCOME PAGE IS INITIALESED AND MANNEGED IN MASSEGEbANNER WHICH IS PRESENT IN TOP VIEW
    //HERE CONSTRUCTOR ASSIGNS VALUE TO MSG , THEN IT IS USED BY MASSEGE-BANNER FILE PRESENT IN BOTTON VIEW , WHERE ALL FILE PRESENT
    
   public $msg ;
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.massege-banner');
    }
}

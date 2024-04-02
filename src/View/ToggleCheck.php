<?php

namespace Jiny\UI2\View;

use Illuminate\View\Component;

class ToggleCheck extends Component
{
    private $packageName = "jiny-ui2";
    public $status;

    public $color_on= "#007bff";
    public $color_off= "gray";

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status=1)
    {
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view($this->packageName.'::components.toggle.check');
    }
}

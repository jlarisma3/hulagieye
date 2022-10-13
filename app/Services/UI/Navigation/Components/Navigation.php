<?php

namespace App\Services\UI\Navigation\Components;

use App\Services\Traits\Attribute;

class Navigation
{
    use Attribute;

    private $pageName;

    private $routeName;

    private $route;

    private $title;

    public function __construct(array $attributes)
    {
        $fn = function($c) {
            if(!is_null($c->routeName))
                $this->route = route($c->routeName);
        };

        $this->init($attributes, $fn);
    }
}
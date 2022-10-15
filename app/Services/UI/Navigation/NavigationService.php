<?php

namespace App\Services\UI\Navigation;

use App\Services\UI\Navigation\Components\Navigation;

class NavigationService
{
    private $navigations;

    public function __construct()
    {
        $navs = getConfig('app/config/navigation.json');

        foreach ($navs as $nav) {
            $this->navigations[] = (new Navigation($nav))
                ->get(['pageName', 'title', 'route']);
        }
    }

    /**
     * @return array
     */
    public function getNavigations()
    {
        return $this->navigations;
    }
}
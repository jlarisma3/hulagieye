<?php

namespace App\Services\UI\Navigation;

use App\Services\UI\Navigation\Components\Navigation;

class NavigationService
{
    private $navigations;

    public function __construct()
    {
        $navs = json_decode(file_get_contents(storage_path('app/config/navigation.json')), true);

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
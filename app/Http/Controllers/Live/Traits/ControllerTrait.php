<?php

namespace App\Http\Controllers\Live\Traits;

use App\Services\UI\Navigation\NavigationService;

trait ControllerTrait
{
    protected $pageData = ['data' => []];

    public function loadNavigation()
    {
        $this->pageData['data']['navigations'] = (new NavigationService)->getNavigations();
    }
}
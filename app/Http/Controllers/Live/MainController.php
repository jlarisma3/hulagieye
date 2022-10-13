<?php

namespace App\Http\Controllers\Live;

use App\Http\Controllers\Controller;
use App\Services\Image\ImageService;
use App\Services\UI\Navigation\NavigationService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    /**
     * @var ImageService
     */
    private $imageService;

    private $pageData = ['data' => []];

    /**
     * @var NavigationService
     */
    private $navigationService;

    public function __construct(
        ImageService $imageService,
        NavigationService $navigationService
    )
    {
        $this->imageService = $imageService;
        $this->navigationService = $navigationService;

        $this->pageData['data']['navigations'] = $this->navigationService->getNavigations();
    }

    //
    public function index(Request $request)
    {
        $this->pageData['data']['images'] = $this->imageService
            ->readFromDisk()
            ->getImages();

        $this->pageData['data']['page_name'] = 'home';

        return Inertia::render('Live/Index', $this->pageData['data']);
    }
}

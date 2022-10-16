<?php

namespace App\Http\Controllers\Live;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Live\Traits\ControllerTrait;
use App\Services\Image\ImageService;
use App\Services\UI\Navigation\NavigationService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    use ControllerTrait;

    /**
     * @var ImageService
     */
    private $imageService;


    public function __construct(
        ImageService $imageService
    )
    {
        $this->imageService = $imageService;

        $this->loadNavigation();
    }

    /**
     * @param Request $request
     *
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        $this->pageData['data']['images'] = $this->imageService
            ->readFromDisk('gallery/mini-gallery')
            ->getImages();

        $this->pageData['data']['page_name'] = 'home';

        return Inertia::render('Live/Index/Index', $this->pageData['data']);
    }

    /**
     * @param Request $request
     *
     * @return \Inertia\Response
     */
    public function bio(Request $request)
    {
        $this->pageData['data']['page_name'] = 'bio';

        $this->pageData['data']['bio_pic'] = head($this->imageService
            ->readFromDisk('bio')
            ->getImages());

        return Inertia::render('Live/Bio/Bio', $this->pageData['data']);
    }
}

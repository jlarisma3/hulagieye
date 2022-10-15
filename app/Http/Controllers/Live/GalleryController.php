<?php

namespace App\Http\Controllers\Live;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Live\Traits\ControllerTrait;
use App\Services\Gallery\AlbumService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GalleryController extends Controller
{
    use ControllerTrait;

    private $albumService;

    /**
     * @param AlbumService $albumService
     */
    public function __construct(AlbumService $albumService)
    {
        $this->albumService = $albumService;

        $this->loadNavigation();
    }

    /**
     * @param Request $request
     *
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        $this->pageData['data']['albums'] = $this->albumService->getAlbums();

        return Inertia::render('Live/Gallery', $this->pageData['data']);
    }
}

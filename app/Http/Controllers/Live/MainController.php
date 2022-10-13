<?php

namespace App\Http\Controllers\Live;

use App\Http\Controllers\Controller;
use App\Services\Image\ImageService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    /**
     * @var ImageService
     */
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    //
    public function index(Request $request)
    {
        $images = $this->imageService
            ->readFromDisk()
            ->getImages();

        return Inertia::render('Live/Index', ['images' => $images]);
    }
}

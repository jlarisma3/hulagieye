<?php

namespace App\Services\Gallery\Models;

use App\Services\Image\ImageService;
use App\Services\Traits\Attribute;

class Album
{
    use Attribute;

    private $id;

    private $title;

    private $tile;

    private $link;

    private $cover;

    public function __construct(array $attributes)
    {
        $fn = function ($class) {
            $img = (new ImageService)
                ->readFromDisk("gallery/album/$class->id/tile")
                ->getImages();

            $this->cover = head($img);
        };

        $this->init($attributes, $fn);
    }
}
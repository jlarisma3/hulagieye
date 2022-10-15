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

    private $slug;

    private $cover;

    private $url;

    private $photos = [];

    private $shortDescription;

    public function __construct(array $attributes)
    {
        $fn = function ($class) {
            $img = (new ImageService)
                ->readFromDisk("gallery/album/$class->id/tile")
                ->getImages();

            $this->cover = head($img);

            if(!is_null($this->link) && !is_null($this->slug))
                $this->url = route($this->link, ['slug' => $this->slug]);
        };

        $this->init($attributes, $fn);
    }

    public function loadPhotos()
    {
        $images = (new ImageService)
            ->readFromDisk("gallery/album/$this->id/photos")
            ->getImages();

        $this->photos = $images;

        return $this;
    }
}
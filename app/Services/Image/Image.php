<?php

namespace App\Services\Image;

use App\Services\Traits\Attribute;

class Image
{
    use Attribute;

    private $height;

    private $width;

    private $name;

    private $path;

    private $isPortrait;

    public function __construct(array $attributes)
    {
        $fn = function ($class) {
            if(!is_null($class->width) && !is_null($class->height)) {
                //var_dump($class);
                $this->isPortrait = $class->width > $class->height;
            }
        };

        $this->init($attributes, $fn);
    }
}
<?php

namespace App\Services\Image;

class Image
{
    private $height;

    private $width;

    private $name;

    private $path;

    private $isPortrait;

    public function __construct(array $attributes)
    {
        foreach ($attributes as $prop => $value) {
            //if(property_exists(get_class($this), $this->{$prop}))
                $this->{$prop} = $value;

            $this->isPortrait = $this->width > $this->height;
        }
    }

    /**
     * @param array $attributes
     *
     * @return array|mixed
     */
    public function get(array $attributes)
    {
        $pub = [];
        foreach ($attributes as $prop) {
            $pub[$prop] = $this->{$prop};
        }

        return $pub;
    }

}
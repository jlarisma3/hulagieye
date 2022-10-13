<?php

namespace App\Services\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    private $images;

    const DIRECTORY = 'gallery';

    /**
     * @return $this
     */
    public function readFromDisk()
    {
        $files = Storage::disk('public')->allFiles(self::DIRECTORY);
        foreach ($files as $file) {
            $o = getimagesize(storage_path('app/public/') . $file);
            $this->images[] = (new Image([
                'width' => $o[0],
                'height' => $o[1],
                'path' => url('storage') ."/$file",
                'name' => basename($file)
            ]))->get(['path', 'isPortrait']);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }
}
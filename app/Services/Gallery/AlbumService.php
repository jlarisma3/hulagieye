<?php

namespace App\Services\Gallery;

use App\Services\Gallery\Models\Album;

class AlbumService
{
    private $albums = [];

    public function __construct()
    {
        $albums = getConfig('app/config/album.json');

        foreach ($albums as $album) {
            $this->albums[] = (new Album($album))
                ->get();
        }
    }

    public function getAlbums()
    {
        return $this->albums;
    }
}
<?php

namespace App\Services\Gallery;

use App\Services\Gallery\Models\Album;

class AlbumService
{
    private $albums = [];

    private $album;

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

    public function setAlbum(string $slug = '')
    {
        $album = collect($this->albums)
            ->where('slug', $slug)
            ->first();

        $this->album = new Album($album);

        return $this;
    }

    public function getAlbumPhotos()
    {
        return $this->album
            ->loadPhotos()
            ->get();
    }
}
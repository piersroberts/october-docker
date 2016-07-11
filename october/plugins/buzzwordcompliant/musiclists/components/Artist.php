<?php
namespace BuzzwordCompliant\Musiclists\Components;

use BuzzwordCompliant\Musiclists\Models\Artist as ArtistModel;
use BuzzwordCompliant\MusicLists\Models\Album as AlbumModel;

class Artist extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Artist',
            'description' => 'Displays artist stuff'
        ];
    }

    public $artist;

    public function defineProperties()
    {
        return [
            'includeAlbums' => [
                'title' => 'Include albums',
                'description' => 'Include artis albums too',
                'type' => 'checkbox',
            ]
        ];
    }

    public function onRun()
    {
        $artistSlug = $this->param('artist');
        $this->artist = ArtistModel::where('slug', $artistSlug)->first();

        if (!$this->artist) {
            \Response::make($this->controller->run('404'), 404);
        }

        if ($this->property('includeAlbums')) {
            $this->artist['albums'] = $this->albums();
        }

        $this->page['artist'] = $this->artist;

    }

    public function albums()
    {
        $albums = AlbumModel::where('artist_id', $this->artist->id)->get();
        return $albums;
    }
}
<?php
namespace BuzzwordCompliant\Musiclists\Components;

use BuzzwordCompliant\Musiclists\Models\Album as AlbumModel;

class Album extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Album',
        ];
    }

    public function onRun()
    {
        $albumSlug = $this->param('album');
        $artistSlug = $this->param('artist');

        $album = AlbumModel::where('slug', $albumSlug)->with(
            ['artist' => function ($q) use ($artistSlug) {
                $q->where('slug', $artistSlug);
            }]
        )->first();

        if ($album && $album->artist) {
            $this->page['album'] = $album;
        }else{
            \Response::make($this->controller->run('404'), 404);
        }

    }

}
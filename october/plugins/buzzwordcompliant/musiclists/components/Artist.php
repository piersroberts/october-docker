<?php
namespace BuzzwordCompliant\Musiclists\Components;
use BuzzwordCompliant\Musiclists\Models\Artist as ArtistModel;
class Artist extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Artist',
        ];
    }

    public function onRun()
    {
        $artistSlug = $this->param('artist');
        $artist = ArtistModel::where('slug', $artistSlug)->first();

        if ($artist) {
            $this->page['artist'] = $artist;
        } else {
            \Response::make($this->controller->run('404'), 404);
        }

    }
}
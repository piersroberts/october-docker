<?php
namespace BuzzwordCompliant\Musiclists\Components;

use BuzzwordCompliant\MusicLists\Models\AlbumList as AlbumList;

class AlbumLists extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Album Lists',
            'description' => 'Displays a list of lists'
        ];
    }

    public function defineProperties()
    {
        return [
            'limit' => [
                'title' => 'Limit',
                'description' => 'The number of lists to return',
                'type' => 'integer',
            ]
        ];
    }

    public function onRun()
    {
        $this->page['albumLists'] = AlbumList::with('publication')->orderBy('updated_at', 'desc')->get();
    }
}
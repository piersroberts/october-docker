<?php
namespace BuzzwordCompliant\Musiclists\Components;

class AlbumList extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Album List',
        ];
    }

// This array becomes available on the page as {{ component.posts }}
    public function albumList()
    {
        return ['First Post', 'Second Post', 'Third Post'];
    }
}
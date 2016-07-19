<?php
namespace BuzzwordCompliant\Musiclists\Components;

class Publication extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Publication',
        ];
    }

// This array becomes available on the page as {{ component.posts }}
    public function publication()
    {
        return ['a'=>'First Post', 'b'=>'Second Post', 'c'=>'Third Post'];
    }
}
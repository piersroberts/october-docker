<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;
use Str;

class AlbumList extends Model
{
    use \October\Rain\Database\Traits\Sluggable;
    //use \October\Rain\Database\Traits\Sortable;

    protected $table = 'ml_album_lists';
    protected $slugs = ['slug' => 'name'];

    public $belongsTo = [
        'publication' => 'BuzzwordCompliant\Musiclists\Models\Publication'
    ];

    public $belongsToMany = [
        'items' => [
            'BuzzwordCompliant\Musiclists\Models\Album',
            'table' => 'ml_album_list_items',
            'pivot' => ['position'],
            'pivotModel' => 'BuzzwordCompliant\Musiclists\Models\AlbumListItem'

        ]
    ];
}
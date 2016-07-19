<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;
use Str;

class AlbumList extends Model
{
    protected $table = 'ml_album_lists';

    public $belongsTo = [
        'publication' => 'BuzzwordCompliant\Musiclists\Models\Publication'
    ];

    public $belongsToMany = [
        'albums' => [
            'BuzzwordCompliant\Musiclists\Models\Album',
            'table' => 'ml_album_list_items',
            'pivot' => ['position'],
            'pivotModel' => 'BuzzwordCompliant\Musiclists\Models\AlbumListItem',
        ]
    ];

    public function beforeCreate()
    {
        $this->slug = Str::slug($this->name);
    }
}
<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;
use Str;

class Album extends Model
{
    protected $table = 'ml_albums';

    public $belongsTo = [
        'artist' => 'BuzzwordCompliant\Musiclists\Models\Artist'
    ];

    public $belongsToMany = [
        'album_lists' => [
            'BuzzwordCompliant\Musiclists\Models\AlbumList',
            'table' => 'ml_album_list_items',
            'pivot' => ['position']
        ]
    ];

    public function beforeCreate()
    {
        $this->slug = Str::slug($this->name);
    }
}
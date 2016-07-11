<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;

class AlbumListItem extends Model
{
    protected $table = 'ml_album_list_items';

    public $hasOne = [
        'album' => 'BuzzwordCompliant\Musiclists\Models\Album',
    ];

    public $belongsTo = [
        'albumList' => 'BuzzwordCompliant\Musiclists\Models\AlbumList'
    ];
}
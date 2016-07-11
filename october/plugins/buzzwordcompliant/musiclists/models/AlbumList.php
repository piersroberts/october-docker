<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;

class AlbumList extends Model
{
    protected $table = 'ml_album_lists';

    public $belongsTo = [
        'publication' => 'BuzzwordCompliant\Musiclists\Models\Publication'
    ];
    public $hasMany = [
        'albumListItems' => 'BuzzwordCompliant\Musiclists\Models\AlbumListItem'
    ];
}
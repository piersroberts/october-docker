<?php
namespace BuzzwordCompliant\Musiclists\Models;

use October\Rain\Database\Pivot;

/**
 * User-Role Pivot Model
 */
class AlbumListItem extends Pivot
{
    use \October\Rain\Database\Traits\Sortable;
    public $belongsTo = [
        'albumList' => ['BuzzwordCompliant\Musiclists\Models\AlbumList']
    ];
}
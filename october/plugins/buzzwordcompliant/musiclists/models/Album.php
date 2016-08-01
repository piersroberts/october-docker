<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;

class Album extends Model
{
    use \October\Rain\Database\Traits\Sluggable;

    protected $table = 'ml_albums';
    protected $slugs = ['slug' => 'name'];

    public $belongsTo = [
        'artist' => 'BuzzwordCompliant\Musiclists\Models\Artist'
    ];

}
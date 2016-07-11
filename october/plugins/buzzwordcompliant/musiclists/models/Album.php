<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;

class Album extends Model
{
    protected $table = 'ml_albums';

    public $belongsTo = [
        'artist' => 'BuzzwordCompliant\Musiclists\Models\Artist'
    ];
}
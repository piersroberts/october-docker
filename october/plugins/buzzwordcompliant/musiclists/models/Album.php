<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;

class Album extends Model
{
    public $belongsTo = [
        'artist' => 'BuzzwordCompliant\Musiclists\Models\Artist'
    ];
}
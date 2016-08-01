<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;

class Artist extends Model
{
    use \October\Rain\Database\Traits\Sluggable;
    protected $table = 'ml_artists';
    protected $slugs = ['slug' => 'name'];
}
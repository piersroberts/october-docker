<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;

class Publication extends Model
{
    use \October\Rain\Database\Traits\Sluggable;
    protected $slugs = ['slug' => 'name'];
    protected $table = 'ml_publications';
    public $timestamps = false;

}
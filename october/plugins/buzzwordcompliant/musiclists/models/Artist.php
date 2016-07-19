<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;
use Str;

class Artist extends Model
{
    protected $table = 'ml_artists';

    public function beforeCreate()
    {
        $this->slug = Str::slug($this->name);
    }

}
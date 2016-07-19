<?php
namespace BuzzwordCompliant\Musiclists\Models;

use Model;
use Str;

class Publication extends Model
{
    protected $table = 'ml_publications';
    public $timestamps = false;

    public function beforeCreate()
    {
        $this->slug = Str::slug($this->name);
    }

}
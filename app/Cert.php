<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Cert extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name'];

    protected $appends = ['cert'];

    public function getCertAttribute()
    {
        return $this->getMedia('cert')->first()->getUrl();
    }
}

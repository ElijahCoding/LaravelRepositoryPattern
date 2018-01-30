<?php

namespace App;

use App\Traits\Eloquent\HasLive;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasLive;

    protected $guarded = [];

    public function getRouteKeyName()
    {
      return 'slug';
    }

    public function posts()
    {
      return $this->hasMany(Post::class);
    }
}

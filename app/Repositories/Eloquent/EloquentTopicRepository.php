<?php

namespace App\Repositories\Eloquent;

use App\Topic;
use App\Repositories\RepositoryAbstract;
use App\Repositories\Contracts\TopicRepository;

class EloquentTopicRepository extends RepositoryAbstract implements TopicRepository
{
    public function entity()
    {
      return Topic::class;
    }
    //
    // public function allLive()
    // {
    //   return $this->entity->where('live', true)->get();
    // }
    //
    // public function allLiveLatest()
    // {
    //   return $this->entity->where('live', true)->latest()->get();
    // }

    public function findBySlug($slug)
    {
      return $this->findWhereFirst('slug', $slug);
    }
}

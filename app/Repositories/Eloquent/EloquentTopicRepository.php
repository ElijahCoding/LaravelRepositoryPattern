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
}

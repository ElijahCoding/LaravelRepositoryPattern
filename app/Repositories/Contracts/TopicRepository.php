<?php

namespace App\Repositories\Contracts;

interface TopicRepository
{
  // public function all();

  // public function allLive();

  // public function allLiveLatest();

  public function findBySlug($slug);
}

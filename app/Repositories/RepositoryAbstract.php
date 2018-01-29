<?php

namespace App\Repositories;

use Exception;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Exceptions\NoEntityDefined;

abstract class RepositoryAbstract implements RepositoryInterface
{
  protected $entity;

  public function __construct()
  {
    $this->entity = $this->resolveEntity();

    // dd($this->entity);
  }

  public function all()
  {
    return $this->entity->all();
  }

  protected function resolveEntity()
  {
    if (!method_exists($this, 'entity')) {
      throw new ns\NoEntityDefined();
    }

    return app()->make($this->entity());
  }
}

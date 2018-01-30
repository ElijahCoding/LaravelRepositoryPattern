<?php

namespace App\Repositories\Contracts;

interface UserRepository
{
  public function createAddress($userId, array $properties);
}

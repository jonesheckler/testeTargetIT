<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class EloquentUserRepository extends BaseEloquentRepository implements UserRepositoryInterface
{
  public function entity()
  {
    return User::class;
  }

}

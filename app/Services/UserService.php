<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService
{

  private $repository;

  public function __construct(UserRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }

  public function getAll()
  {
    return $this->repository->getAll();
  }

  public function getUserById($id)
  {
    return $this->repository->findById($id);
  }

  /*
  /Criar novo usuário
  */
  public function create(array $data){
      return $this->repository->create($data);
  }


    /*
  /Deletar usuário
  */
  public function destroy(int $id){
    return $this->repository->delete($id);
}

}

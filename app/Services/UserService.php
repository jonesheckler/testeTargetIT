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

    try {
      $this->repository->delete($id);
      return response()->json([
              'message'   => 'Registro deletado',
          ], 200);

    } catch (\Throwable $th) {
        return response()->json([
            'message'   => 'Registro não encontrado',
        ], 404);
    }
   
}

}

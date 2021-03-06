<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserService
{

  private $repository;

  public function __construct(UserRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }

/* Retornar todos os usuários 
  /
  */
  public function getAll()
  {
    return $this->repository->getAll();
  }

  /* Retornar o usuario pelo ID
  /
  */

  public function getUserById($id)
  {
    return $this->repository->findById($id);
  }

  /*
  /Criar novo usuário
  */
  public function create(array $data){
      $data['password'] = Hash::make($data['password']);
      return $this->repository->create($data);
  }


    /*
  /Editar usuário
  */
  public function update($id, array $data){
    try {
        $data['password'] = Hash::make($data['password']);
        $this->repository->update($id, $data);
        return $this->repository->findById($id); 
    } catch (\Throwable $th) {
      return response()->json([
          'message'   => 'Registro não encontrado',
      ], 404);
    } 
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

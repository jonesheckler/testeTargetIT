<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUser;
use App\Http\Resources\UserResource;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    protected $userService;

   public function __construct(UserService $userService)
   {
       $this->userService = $userService;
   }

   // Retorna todos os usuários
   public function index(){
      return  UserResource::collection($this->userService->getAll());
   }


   /* Cria novo usuário
   /
   */

   public function store(StoreUser $request){
        $user = $this->userService->create($request->all());
        return new UserResource($user);
   }


    /* Deletar usuário
   /
   */

   public function destroy($id){
        $user = $this->userService->destroy($id);
        return $user;
    }

}

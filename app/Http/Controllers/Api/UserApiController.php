<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
      return  $this->userService->getAll();
   }
}

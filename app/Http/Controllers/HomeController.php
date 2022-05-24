<?php

namespace App\Http\Controllers;

use App\Http\Service\TokenService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $tokenService;
    public function __construct(TokenService $tokenService)
    {
        $this->tokenService = $tokenService;
    }

    public function index(){
        return view('welcome');
    }

    public function getToken(): string
    {
        return $this->tokenService->fetchToken()->access_token ?? "Не найден";
    }
}

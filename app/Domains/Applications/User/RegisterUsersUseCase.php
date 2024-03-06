<?php

namespace App\Domains\Applications\User;

use App\Repository\UserRepository;
use App\Services\Register\RegisterUserInfoService;

class RegisterUsersUseCase {

    private RegisterUserInfoService $registerUserInfoService;

    public function __construct(
        RegisterUserInfoService $registerUserInfoService
    ) {
        $this->registerUserInfoService = $registerUserInfoService;
    }

    public function handle(array $userInfo): void 
    {
        $this->registerUserInfoService->handle($userInfo);
    }
}
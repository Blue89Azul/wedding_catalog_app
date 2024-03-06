<?php

namespace App\Service\Register;

use App\Repository\UserRepository;
use App\Services\Convert\ConverterInterface;
use App\Services\Validate\ValidatorInterface;

class RegisterUserInfoService {

    private UserRepository $userRepository;

    public function __construct(
        UserRepository $userRepository
    ) {
        $this->userRepository = $userRepository;
    }

    public function handle(array $userInfo): void 
    {
        try {
            $this->userRepository->insert($userInfo);
        } catch (\Throwable $th) {
            // validatorのエラーは、そのままエラーを表示する
        } 
    }
}
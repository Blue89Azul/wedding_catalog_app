<?php

namespace App\Domains\Applications;

use App\Repository\UserRepository;
use App\Services\Convert\ConverterInterface;
use App\Services\Validate\ValidatorInterface;

class RegisterUsersUseCase {

    private UserRepository $userRepository;
    private ConverterInterface $converter;
    private ValidatorInterface $validator;

    public function __construct(
        UserRepository $userRepository,
        ConverterInterface $converter,
        ValidatorInterface $validator
    ) {
        $this->userRepository = $userRepository;
        $this->converter      = $converter;
        $this->validator      = $validator;
    }

    public function handle(array $userInfo): void 
    {
        try {
            $this->validator->handle($userInfo);
            $this->converter->handle($userInfo);
            $this->userRepository->insert($userInfo);
        } catch (\Throwable $th) {
            // validatorのエラーは、そのままエラーを表示する
        } catch(\Throwable $th) {
            // Repositoryのエラーは、ロールバック
        }
        
    }
}
<?php

namespace App\Domains\Applications\Csv;

use App\Services\Csv\CsvUploadService;
use App\Services\Register\RegisterUserInfoService;
use App\Services\Convert\ConverterInterface;
use App\Services\Validate\ValidatorInterface;

/**
 * CSVファイルを用いて列席者情報を一括でアップロードするユースケース
 */
class ParticipantsInfoUploadUseCase {

    private CsvUploadService $csvUploadService;
    private RegisterUserInfoService $registerUserInfoService;
    private ConverterInterface $converter;
    private ValidatorInterface $validator;

    public function __construct(
        CsvUploadService $csvUploadService,
        RegisterUserInfoService $registerUserInfoService,
        ConverterInterface $converter,
        ValidatorInterface $validator
    ) {
        $this->csvUploadService = $csvUploadService;
        $this->registerUserInfoService = $registerUserInfoService;
        $this->converter = $converter;
        $this->validator = $validator;
    }

    public function handle(string  $filePath): void 
    {
        try {
            
        } catch (\Throwable $th) {

        }
    }
}
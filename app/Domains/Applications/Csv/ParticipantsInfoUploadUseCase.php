<?php

namespace App\Domains\Applications\Csv;

use App\Services\Csv\CsvServiceInterface;
use App\Services\Register\RegisterUserInfoService;
use App\Services\Convert\ConverterInterface;
use App\Services\Validate\ValidatorInterface;

/**
 * CSVファイルを用いて列席者情報を一括でアップロードするユースケース
 */
class ParticipantsInfoUploadUseCase {

    private RegisterUserInfoService $registerParticipantsService;
    private CsvServiceInterface $csvService;
    private ConverterInterface $converter;
    private ValidatorInterface $validator;

    public function __construct(
        RegisterUserInfoService $registerParticipantsService, //サービスコンテナの話だと思う。
        CsvServiceInterface $csvService,
        ConverterInterface $converter,
        ValidatorInterface $validator
    ) {
        $this->registerParticipantsService = $registerParticipantsService;
        $this->csvService = $csvService;
        $this->converter  = $converter;
        $this->validator  = $validator;
    }

    public function handle(string $filePath): void
    {
        try {
            foreach($this->csvService->upload($filePath) as $rowInfo) {
                print_r($rowInfo);
                // $this->validator->handle($rowInfo);
                // $participants = $this->converter->handle($rowInfo);
                // $this->registerParticipantsService->handle($participants);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
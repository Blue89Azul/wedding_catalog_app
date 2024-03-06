<?php

namespace App\Services\Convert;

use App\Domains\Applications\PrefectureSingleton;

class AddressCsvConverter implements ConverterInterface {

    private PrefectureSingleton $prefectureSingleton;

    public function __construct(PrefectureSingleton $prefectureSingleton) 
    {
        $this->prefectureSingleton = $prefectureSingleton;
    }

    public function handle(array $originals): array
    {
        $originals = $this->trimSpace($originals);

        return [
            'post_code' => $originals[0],
            'prefecture_id' => $this->toPrefectureId($originals[1]),
            'city' => $originals[2],
            'street' => $originals[3],
            'building' => $originals[4]
        ];
    }

    /**
     * 他のConverterと重複
     * 抽象クラスにするか、移譲にするか検討。
     * 2024.03 以下の書き方をUserCsvConverterに適用
     */
    private function trimSpace(array $originals): array
    {
        return array_map(fn($row) => preg_replace('/\s+/', '',trim($row)), $originals);
    }

    private function toPrefectureId(string $prefectureName): int
    {
        return $this->prefectureSingleton->toId($prefectureName);
    }
}
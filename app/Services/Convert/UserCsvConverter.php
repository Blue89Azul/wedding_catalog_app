<?php

namespace App\Services\Convert;

use App\Domains\Singleton\PrefectureSingleton;

class UserCsvConverter implements ConverterInterface {

    private PrefectureSingleton $prefectureSingleton;

    public function __construct(PrefectureSingleton $prefectureSingleton) 
    {
        $this->prefectureSingleton = $prefectureSingleton;
    }

    public function handle(array $originals): array 
    {
        return [
            'name_last'       => $this->trimSpace($originals[0]),
            'name_first'      => $this->trimSpace($originals[1]),
            'name_last_kana'  => $this->trimSpace($originals[2]),
            'name_first_kana' => $this->trimSpace($originals[3]),
            'email'           => $this->trimSpace($originals[5]),
            'post_code'       => $this->trimSpace($originals[6]),
            'prefecture_id'   => $this->toPrefectureId($this->trimSpace($originals[7])),
            'city'            => $this->trimSpace($originals[8]),
            'street'          => $this->trimSpace($originals[9]),
            'building'        => $this->trimSpace($originals[10]),
            'password'        => Hash::make($this->trimSpace($originals[4]))
        ];
    }

    /**
     * 他のConverterと重複
     * 抽象クラスにするか、移譲にするか検討。
     */
    private function trimSpace($row): string
    {
        return preg_replace('/\s+/', '',trim($row));
    }

    private function toPrefectureId(string $prefectureName): int
    {
        return $this->prefectureSingleton->toId($prefectureName);
    }
}
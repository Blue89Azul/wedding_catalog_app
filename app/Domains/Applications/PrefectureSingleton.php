<?php

namespace App\Domains\Applications;

use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Collection;

/**
 * PrefectureSingletonクラスは、都道府県データの管理を行うシングルトンクラスです。
 * このクラスは都道府県の名前とIDの対応関係を保持します。
 */
final class PrefectureSingleton {
    private static $instance;
    private array $prefectureMap;

    private function __construct() 
    {
        foreach($this->fetchAll() as $prefecture) {
            $this->prefectureMap[$prefecture->name] = $prefecture->id;
        }
    }

    private function fetchAll(): Collection 
    {
        return Prefecture::all();
    }

    public static function getInstance(): PrefectureSingleton
    {
        if (!self::$instance) {
            self::$instance = new PrefectureSingleton();
        }
        return self::$instance;
    }

    public function getId(string $prefectureName): int
    {
        return $this->prefectureMap[$prefectureName];
    }

    public function getName(int $prefectureId): string
    {
        return array_search($prefectureId, $this->prefectureMap);
    }
}
<?php

namespace App\Services\Convert;

interface ConverterInterface {
    public function handle(array $originals): array;
}
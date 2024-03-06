<?php

namespace App\Services\Csv\Validate;

class UserCsvValidator {
    public function handle(array $originals): bool
    {
        return is_array($originals);
    }
}
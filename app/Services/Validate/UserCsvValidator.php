<?php

namespace App\Services\Validate;

use App\Services\Validate\ValidatorInterface;

class UserCsvValidator implements ValidatorInterface {
    public function handle(array $originals): bool
    {
        return is_array($originals);
    }


}
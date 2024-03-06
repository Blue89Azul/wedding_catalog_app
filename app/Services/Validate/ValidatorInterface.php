<?php

namespace App\Services\Validate;

interface ValidatorInterface {
    public function handle(array $originals): bool;
}
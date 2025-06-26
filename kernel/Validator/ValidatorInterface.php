<?php

namespace App\Kernel\Validator;

interface ValidatorInterface
{
    public function errors(): array;

    public function validate(array $data, array $rules): bool;
}
